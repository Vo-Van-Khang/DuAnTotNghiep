<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function get_id($id){
        $movie = DB::table("movies")->select("*")->where("id", $id)->first();
        $urls = DB::table("urls")->select("*")->where("media_id", $id)->get();
        $episodes = DB::table("episodes")->select("*")->where("id_movie", $id)->orderBy("episode","asc")->get();
        // dd($urls);
        return view("clients.detail",[
            "movie"=>$movie,
            "urls"=>$urls,
            "episodes"=>$episodes
        ]);
    }
}
