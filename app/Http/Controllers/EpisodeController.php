<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Requests\Validate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EpisodeController extends Controller
{
    public function get_by_movie($id_movie,$id_episode){
        // $movie = DB::table("movies")->select("*")->where("id", $id_movie)->first();
        $servers = DB::table('urls')
        ->select('source')
        ->where("type", 'episode')
        ->where('media_id', $id_episode)
        ->distinct()
        ->get();

        $server_selected = "server 1";
        if(request("server")){
            $server_selected = request("server");
        }

        $urls = DB::table("urls")
        ->select("*")
        ->where("media_id", $id_episode)
        ->where("type", 'episode')
        ->get();

        $episodes = DB::table("episodes")->select("*")->where("id_movie", $id_movie)->orderBy("episode","asc")->get();
        
        $episode_focus = DB::table("episodes")->select("*")->where("id", $id_episode)->first();
        
        $id_category = DB::table("movies")
        ->select("id_category")
        ->where("id",$id_movie)
        ->first();
        // dd($category);
        $similars = DB::table("movies")
        ->select("*")
        ->where("id_category", $id_category->id_category)
        ->get();

        $movie = Movies::with('category')->find($id_movie);


        if(true){
            $check_watch_later = DB::table("watch_laters")->where("id_movie",$movie->id)->where("id_user",1)->count();
        }else{
            $check_watch_later = 0;
        } 

        if(true){
            $check_like = DB::table("likes")->where("id_movie",$movie->id)->where("id_user",1)->count();
        }else{
            $check_like = 0;
        } 

         
        $likes = DB::table("likes")
        ->select("*")
        ->where("id_movie", $id_movie)
        ->count();
        
        $categories = DB::table("categories")
        ->get();

        $comments = Comments::with("user")->with("reply_comments")->where("id_movie",$id_movie)->orderBy("created_at","desc")->get();
        
        return view("clients.movie",[
            "movie"=>$movie,
            "servers"=>$servers,
            "server_selected"=>$server_selected,
            "urls"=>$urls,
            "likes"=>$likes,
            "episodes"=>$episodes,
            "similars" => $similars,
            "categories" => $categories,
            "episode_focus" => $episode_focus,
            "comments" => $comments,
            "check_like" => $check_like,
            "check_watch_later" => $check_watch_later
        ]);
    }
    public function admin__add($id_movie){
        $episodes = DB::table("episodes")->where("id_movie",$id_movie)->get();
        return view('admins.movie.episode.add', [
            "episodes" => $episodes,
            "movie" => $id_movie,
            "selected" => "movie"
        ]);
    }
    public function admin__update__form($id_movie,$id){
        $episode = DB::table("episodes")->where("id",$id)->first();
        $urls = DB::table("urls")->where("type","episode")->where("media_id",$id)->get();
        return view('admins.movie.episode.update', [
            "episode" => $episode,
            "urls" => $urls,
            "movie" => $id_movie,
            "selected" => "movie"
        ]);
    }
    public function admin__create(Validate $request , $movie){
        $episodeId = DB::table('episodes')->insertGetId([
            'episode' => $request->input('episode'),
            'id_movie' => $movie
        ]);

        $urls = request()->input('urls'); 
        $resolutions = request()->input('resolutions'); 
        $premiums = request()->input('premiums');
       
        foreach ($urls as $index => $url) {
            if ($url) {
                $resolution = $resolutions[$index] ?? null;

                // Kiểm tra các URL đã tồn tại với resolution và media_id tương ứng
                $existingUrls = DB::table('urls')
                    ->where('url', $url)
                    ->where('resolution', $resolution)
                    ->where("type", "episode")
                    ->where("media_id", $episodeId)
                    ->get();
        
                // Tính toán số lượng các bản ghi trùng, để gán source cho bản ghi mới
                $newSource = $existingUrls->count() + 1; // Tăng số lượng server tương ứng
        
                // Thêm URL mới vào cơ sở dữ liệu
                DB::table('urls')->insert([
                    'url' => $url,
                    'resolution' => $resolution,
                    'type' => 'episode',
                    'premium' => $premiums[$index] ?? null,
                    'media_id' => $episodeId,
                    'source' => "server " . $newSource // Gán source với số lượng server
                ]);
            }
        }
    
        return response()->json([
            'success' => true
        ]);
    }

    public function admin__delete($id){
        DB::table("episodes")->where("id",$id)->delete();
        $url = DB::table("urls")->where("type","episode")->where("media_id",$id);
        $videoPath =  parse_url($url->value("url"), PHP_URL_PATH);
        Storage::disk('s3')->delete($videoPath);
        $url->delete();

        return response()->json([
            "success" => true
        ]);
    }

    public function admin__update(Validate $request, $id_movie,$id) {
        $request->validated();

        // Lấy thông tin bộ phim hiện tại
        $episodeData = DB::table("episodes")->where('id', $id)->first();

        // Cập nhật thông tin phim
        DB::table("episodes")->where('id', $id)->update([
            "episode" => $request->input('episode')
        ]);

        $currentUrls = DB::table('urls')->where("type", "episode")->where('media_id', $id)->get();
        $totalUrls = $request->file('url') ? count($request->file('url')) + $currentUrls->count() : 0;

        // Cập nhật hoặc xóa URL hiện tại
        foreach ($currentUrls as $index => $url) {
            if (isset($request->url[$index])) {
                $resolution = $request->resolution[$index];
                $premium = $request->premium[$index];
                $newUrl = $request->url[$index];

                if ($request->hasFile("url.$index")) {
                    $videoPath = $request->file("url.$index")->store('videos', 's3');
                    Storage::disk('s3')->setVisibility($videoPath, 'public');
                    $videoUrl = Storage::disk('s3')->url($videoPath);

                    if ($url->url !== $videoUrl) {
                        $oldVideoPath = parse_url($url->url, PHP_URL_PATH);
                        if (Storage::disk('s3')->exists($oldVideoPath)) {
                            Storage::disk('s3')->delete($oldVideoPath);
                        }
                    }

                    $newUrl = $videoUrl;
                }

                DB::table('urls')->where('id', $url->id)->update([
                    'url' => $newUrl,
                    'resolution' => $resolution,
                    'premium' => $premium,
                ]);
            } else {
                $resolution = $request->resolution[$index];
                $premium = $request->premium[$index];
                DB::table('urls')->where('id', $url->id)->update([
                    'resolution' => $resolution,
                    'premium' => $premium,
                ]);
            }
        }

        // Thêm URL mới nếu có thêm file
        if ($totalUrls > $currentUrls->count()) {
            for ($index = $currentUrls->count(); $index < $totalUrls; $index++) {
                if ($request->hasFile("url.$index")) {
                    $videoPath = $request->file("url.$index")->store('videos', 's3');
                    Storage::disk('s3')->setVisibility($videoPath, 'public');
                    $videoUrl = Storage::disk('s3')->url($videoPath);

                    DB::table('urls')->insert([
                        'url' => $videoUrl,
                        'resolution' => $request->input("resolution.$index"),
                        'premium' => $request->input("premium.$index"),
                        'type' => 'episode',
                        'media_id' => $id,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Tập phim đã được cập nhật thành công!');
    }
 
    public function admin__remove__url($id){
        $url = DB::table("urls")->where("id",$id);
        $videoPath = $url->value("url");
        $oldVideoPath = parse_url($videoPath, PHP_URL_PATH);
        if(Storage::disk('s3')->delete($oldVideoPath)){
            $url->delete();
            return response()->json([
                "success" => true
            ]);
        }
    }
}
