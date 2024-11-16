<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function movie($id){
        $views = DB::table("movies")->where("id",$id)->value("views");
        $likes = DB::table("likes")->where("id_movie",$id)->count();
        $comments = Comments::with("user", 'reply_comments.user', 'reply_comments.user_reply')->with("reply_comments")->where("id_movie",$id)->orderBy("created_at", "desc")->get();
        // dd($comments);
        return response()->json([
            "success" => true,
            "views" => $views,
            "comments" => $comments,
            "likes" => $likes
        ]);
    }
}
