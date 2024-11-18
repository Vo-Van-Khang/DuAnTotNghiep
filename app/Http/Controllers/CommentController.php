<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function comment__add($id_movie){
        $id = DB::table("comments")->insertGetId([
            "id_movie" => $id_movie,
            "id_user" => auth()->user()->id,
            "content" => request("comment__content")
        ]);
        $comment = DB::table("comments")->where("id", $id)->first();
        $user = DB::table("users")->where("id", auth()->user()->id)->first();

        return response()->json([
            "success" => true,
            "comment" => $comment,
            "user" => $user
        ]);
    }
    public function remove_by_id($id){
        DB::table("comments")->where('id',$id)->delete();
        return response()->json([
            "success" => true
        ]);
    }
}
