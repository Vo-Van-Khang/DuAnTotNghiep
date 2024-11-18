<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReplyCommentController extends Controller
{
    public function reply__comment__add($id_movie){
        $id = DB::table("reply_comments")->insertGetId([
            "id_movie" => $id_movie,
            "id_user" => auth()->user()->id,
            "id_user_reply" => request('id__user__reply'),
            "id_comment" => request('id__comment'),
            "content" => request("comment__content")
        ]);
        $comment = DB::table("comments")->where("id", request('id__comment'))->first();
        $reply_comment = DB::table("reply_comments")->where("id", $id)->first();
        $user = DB::table("users")->where("id", auth()->user()->id)->first();
        $name_user = DB::table("users")->where("id", request('id__user__reply'))->value("name");
        return response()->json([
            "success" => true,
            "comment" => $comment,
            "reply_comment" => $reply_comment,
            "name_user" => $name_user,
            "user" => $user
        ]);
    }
    public function remove_by_id($id){
        DB::table("reply_comments")->where('id',$id)->delete();
        return response()->json([
            "success" => true
        ]);
    }
}
