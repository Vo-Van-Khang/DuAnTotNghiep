<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WatchLaterController extends Controller
{
    public function add(){
        if(DB::table("watch_laters")->where("id_movie",request('id_movie'))->where("id_user",1)->count() == 0){
            $watchLater = DB::table("watch_laters")->insert([
                "id_movie" => request('id_movie'),
                "id_user" => 1
            ]);
        }
        return response()->json([
            "success" => true
        ]);;
    }
    public function remove(){
        $watchLater = DB::table("watch_laters")->where("id_movie",request('id_movie'))->where("id_user",1)->delete();
        return response()->json([
            "success" => true
        ]);;
    }

}
