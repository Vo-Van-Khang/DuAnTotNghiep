<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function add(){
        DB::table("likes")->insert([
            "id_movie" => request('id_movie'),
            "id_user" => 1
        ]);
        $likes = DB::table("likes")->where("id_movie",request('id_movie'))->count();
        return response()->json([
            "likes" => $likes,
            "success" => true
        ]);;
    }
    public function remove(){
        DB::table("likes")->where("id_movie",request('id_movie'))->where("id_user",1)->delete();
        $likes = DB::table("likes")->where("id_movie",request('id_movie'))->count();
        return response()->json([
            "likes" => $likes,
            "success" => true
        ]);;
    }
    
}
