<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WatchLaterController extends Controller
{
    public function add(){
        DB::table("watch_laters")->insert([
            "id_movie" => request('id_movie'),
            "id_user" => 1
        ]);
        return response()->json([
            "success" => true
        ]);;
    }
    public function remove(){
        DB::table("watch_laters")->where("id_movie",request('id_movie'))->where("id_user",1)->delete();
        return response()->json([
            "success" => true
        ]);;
    }
    public function remove_by_id($id){
        DB::table("watch_laters")->where("id", $id)->delete();
        $watch_laters = DB::table("watch_laters")->where("id_user", 1)->get();
        $categories = DB::table("categories")->get();
        $movie_ids = $watch_laters->pluck('id_movie');
        $movies = Movies::whereIn('id', $movie_ids)->get();
    
        return response()->json([
            'watch_laters' => $watch_laters,
            'categories' => $categories,
            'movies' => $movies,
            "success" => true
        ]);
    }
}
