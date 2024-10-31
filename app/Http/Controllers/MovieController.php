<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Movies;
use App\Models\Slides;
use Illuminate\Http\Request;
use App\Http\Requests\Validate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function get_id($id){
        $movie = Movies::with('get_categories')->find($id);

        $urls = DB::table("urls")
        ->select("*")
        ->where("media_id", $id)
        ->where("type", 'movie')
        ->orderBy("resolution","asc")
        ->get();
        
        $likes = DB::table("likes")
        ->select("*")
        ->where("id_movie", $id)
        ->count();

        $episodes = DB::table("episodes")
        ->select("*")  
        ->where("id_movie", $id)
        ->orderBy("episode","asc")
        ->get();

        $id_category = DB::table("movies")
        ->select("id_category")
        ->where("id",$id)
        ->first();
        // dd($category);
        $similars = DB::table("movies")
        ->select("*")
        ->where("id_category", $id_category->id_category)
        ->get();

        $categories =  DB::table("categories")
        ->select("*")
        ->get();

        $episode_focus = new stdClass();
        $episode_focus->episode = 1;

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

        return view("clients.movie",[
            "movie"=>$movie,
            "urls"=>$urls,
            "likes"=>$likes,
            "episodes"=>$episodes,
            "similars" => $similars,
            "categories" => $categories,
            "episode_focus" => $episode_focus,
            "check_like" => $check_like,
            "check_watch_later" => $check_watch_later
        ]);
    }
    public function index(){
        $movies = Movies::with('get_categories')->where("status", 1)->where("isDeleted", 0)->get();
        $slides = Slides::with('get_movies')->where('status', 'show')->get();
        $categories = DB::table("categories")->get();
        return view('/clients/HomePage', ['movies' => $movies, 'slides' => $slides, 'categories' => $categories]);
    }

    public function admin__view(){
        $movies = Movies::with('get_episodes')->where("isDeleted",0)->get();
        return view('admins.movie.list', [
            "movies" => $movies,
            "selected" => "movie"
        ]);
    }

    public function admin__add(){
        $categories = DB::table("categories")->get();
        return view('admins.movie.add', [
            "categories" => $categories,
            "selected" => "movie"
        ]);
    }

    public function admin__update__form($id){
        $movie = DB::table("movies")->where("id",$id)->first();
        $urls =DB::table("urls")->where("type","movie")->where("media_id",$id)->get();
        $categories = DB::table("categories")->get();
        return view('admins.movie.update', [
            "movie" => $movie,
            "urls" => $urls,
            "categories" => $categories,
            "selected" => "movie"
        ]);
    }

  

    public function admin__create(Validate $request){
    $request->validated();

    $imagePath = "";
    if ($request->hasFile('thumbnail_add')) {
        $image = $request->file('thumbnail_add');
        $imagePath = 'images/thumbnails/' . $image->getClientOriginalName();
        $image->move(public_path('images/thumbnails'), $image->getClientOriginalName());
    }
    // Insert movie details into the database
    $movieId = DB::table('movies')->insertGetId([
        'title' => $request->input('title'),
        'thumbnail' => $imagePath, // Store the image URL in the database
        'cast' => $request->input('cast'),
        'director' => $request->input('director'),
        'release_year' => $request->input('release_year'),
        'country' => $request->input('country'),
        'description' => $request->input('description'),
        'status' => $request->input('status'),
        'id_category' => $request->input('id_category'),
        'duration' => $request->input('duration')// Duration can be adjusted based on actual video length
    ]);

    if ($request->hasFile('url')) {
        foreach ($request->file('url') as $index => $file) {
            if ($file) {
                $videoPath = $file->store('videos', 's3');
                Storage::disk('s3')->setVisibility($videoPath, 'public');
                $videoUrl = Storage::disk('s3')->url($videoPath);

                DB::table('urls')->insert([
                    'url' => $videoUrl,
                    'resolution' => $request->input("resolution.$index"), 
                    'type' => 'movie', 
                    'premium' => $request->input("premium.$index"), 
                    'media_id' => $movieId 
                ]);
            }
        }
    }

    return redirect()->route("admin.movie.list")->with('success', 'Phim đã được thêm thành công!');
}
    public function admin__update(Validate $request, $id) {
        $request->validated();

        // Lấy thông tin bộ phim hiện tại
        $movieData = DB::table("movies")->where('id', $id)->first();
        
        // Xử lý thumbnail
        if ($request->hasFile('thumbnail')) {
            if ($movieData && file_exists(public_path($movieData->thumbnail))) {
                unlink(public_path($movieData->thumbnail));
            }
            $image = $request->file('thumbnail');
            $imagePath = 'images/thumbnails/' . $image->getClientOriginalName();
            $image->move(public_path('images/thumbnails'), $image->getClientOriginalName());
        } else {
            $imagePath = $movieData->thumbnail;
        }

        // Cập nhật thông tin phim
        DB::table("movies")->where('id', $id)->update([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "thumbnail" => $imagePath,
            "cast" => $request->input('cast'),
            "director" => $request->input('director'),
            "release_year" => $request->input('release_year'),
            "id_category" => $request->input('id_category'),
            "country" => $request->input('country'),
            "status" => $request->input('status'),
            "duration" => $request->input('duration'),
        ]);

        $currentUrls = DB::table('urls')->where("type", "movie")->where('media_id', $id)->get();
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
                        'type' => 'movie',
                        'media_id' => $id,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Phim đã được cập nhật thành công!');
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

    public function admin__status__update($id) {
        $show = false;
        $status = DB::table("movies")->where("id", $id)->value("status");
        
        if ($status == 0) {
            DB::table("movies")->where("id", $id)->update([
                "status" => 1
            ]);
            $show = true;
        } else {
            DB::table("movies")->where("id", $id)->update([
                "status" => 0
            ]);
        }
        return response()->json([
            "show" => $show,
            "success" => true
        ]);
    }
    
    public function admin__delete($id){
        $url = DB::table("movies")->where("id",$id)->update([
            "isDeleted" => 1
        ]);
        return response()->json([
            "success" => true
        ]);
    }
}
