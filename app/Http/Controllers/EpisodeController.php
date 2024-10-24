<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EpisodeController extends Controller
{
    public function get_by_movie($id_movie,$id_episode){
        $movie = DB::table("movies")->select("*")->where("id", $id_movie)->first();
        
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

        $categories =  DB::table("categories")
        ->select("*")
        ->get();

        return view("clients.movie",[
            "movie"=>$movie,
            "urls"=>$urls,
            "episodes"=>$episodes,
            "similars" => $similars,
            "categories" => $categories,
            "episode_focus" => $episode_focus
        ]);
    }
}
