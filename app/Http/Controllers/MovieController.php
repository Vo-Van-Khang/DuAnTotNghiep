<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Movies;
use App\Models\Slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
}
