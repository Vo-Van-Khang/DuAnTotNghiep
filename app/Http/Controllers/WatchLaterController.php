<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WatchLaterController extends Controller
{
    public function watch_later($id){
        $check = DB::table("watch_laters")->where("id_movie", $id)->where("id_user",1)->count();
        if($check > 0){
            DB::table("watch_laters")->where("id_movie",$id)->where("id_user",1)->delete();
        }else{
            DB::table("watch_laters")->where("id_movie",$id)->insert([
                "id_user" => 1,
                "id_movie" => $id
            ]);
        }
        return response()->json([
            "check" => $check,
            "success" => true
        ]);
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
