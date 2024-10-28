<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Movies;
use App\Models\Slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function get_id($id){
        $movie = DB::table("movies")
        ->select("*")
        ->where("id", $id)
        ->first();

        $urls = DB::table("urls")
        ->select("*")
        ->where("media_id", $id)
        ->where("type", 'movie')
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
        $movies = Movies::with('get_categories')->get();
        $slides = Slides::with('get_movies')->where('status', 'show')->get();
        $categories = DB::table("categories")->get();
        return view('/clients/HomePage', ['movies' => $movies, 'slides' => $slides, 'categories' => $categories]);
    }

    public function list__admin(){
        $movies = Movies::get();
        return view('admins.movie.list', ['movies' => $movies]);
    }
    Public function allMovie(){
        $movies = Movies::with('get_categories')->get();
        return view('/clients/all', ['movies' => $movies]);
    }
    Public function search(Request $request){
        {
            $search = $request->input('search');
            $movies = Movies::with('get_categories')
                ->where('title', 'LIKE', "%{$search}%")
                ->get();
            return view('/clients/search', ['movies'=> $movies]);
        }
    }

    public function admin_create(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'thumbnail' => 'required|file|mimes:jpeg,jpg,png',
        'cast' => 'required|string|max:255',
        'director' => 'required|string|max:255',
        'release_year' => 'required|integer|min:1900|max:' . date('Y'),
        'country' => 'required|string|max:255',
        'description' => 'required|string',
        'url.*' => 'nullable|file|mimes:mp4,mkv,avi', // Validate video file type
        'resolution.*' => 'nullable|string',
    ]);

    // Upload the image file to public/images
    $imagePath = $request->file('thumbnail')->store('images', 'public'); // Lưu vào public/images

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
        'duration' => "96 phút" // Duration can be adjusted based on actual video length
    ]);

    // Upload video files and their resolutions
    if ($request->hasFile('url')) {
        foreach ($request->file('url') as $index => $file) {
            if ($file) {
                // Upload each video file
                $videoPath = $file->store('videos', 's3');
                Storage::disk('s3')->setVisibility($videoPath, 'public');
                $videoUrl = Storage::disk('s3')->url($videoPath);

                // Save video URL to the 'urls' table
                DB::table('urls')->insert([
                    'url' => $videoUrl,
                    'resolution' => $request->input("resolution.$index"), // Get the corresponding resolution for each video
                    'type' => 'movie',
                    'media_id' => $movieId  // Reference to the movie ID
                ]);
            }
        }
    }

    return redirect()->route("admin.movie.list")->with('success', 'Phim đã được thêm thành công!');
}

}
