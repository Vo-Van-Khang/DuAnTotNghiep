<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function check_movie($id){
        // watch later
        // dd($id);
        if(true){
            $check_watch_later = DB::table("watch_laters")->where("id_movie",$id)->where("id_user",1)->count();
        }else{
            $check_watch_later = 0;
        } 
        return response()->json([
            "check_watch_later" => $check_watch_later,
            "success" => true
        ]);
    }
}
