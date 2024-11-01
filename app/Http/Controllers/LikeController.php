<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function like($id){
        $check = DB::table("likes")->where("id_movie", $id)->where("id_user",1)->count();
        if($check > 0){
            DB::table("likes")->where("id_movie",$id)->where("id_user",1)->delete();
        }else{
            DB::table("likes")->where("id_movie",$id)->insert([
                "id_user" => 1,
                "id_movie" => $id
            ]);
        }
        $likes = DB::table("likes")->where("id_movie", $id)->count();
        return response()->json([
            "check" => $check,
            "likes" => $likes,
            "success" => true
        ]);
    }
    
}
