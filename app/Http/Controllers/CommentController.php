<?php

namespace App\Http\Controllers;
use App\Http\Controllers\comment\comment;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function comment__add($id_movie)
    {
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
    public function remove_by_id($id)
    {
        DB::table("comments")->where('id', $id)->delete();
        return response()->json([
            "success" => true
        ]);
    }


    // Hiển thị danh sách bình luận cho một bộ phim cụ thể
    public function admin__view()
    {
        $comments = Comments::with('movie')
            ->with('user')
            ->where('isDeleted', 0)
            ->get();

        return view('admins.comment.list', [
            "comments" => $comments,
            "selected" => "comment"
        ]);
    }
    public function admin__status__update($id){
        $show = false;
        $status = DB::table("comments")->where("id", $id)->value("status");
        
        if ($status == 0) {
            DB::table("comments")->where("id", $id)->update([
                "status" => 1
            ]);
            $show = true;
        } else {
            DB::table("comments")->where("id", $id)->update([
                "status" => 0
            ]);
        }
        return response()->json([
            "show" => $show,
            "success" => true
        ]);
    }
    public function admin__delete($id){
        DB::table("comments")->where("id",$id)->update([
            "isDeleted" => 1
        ]);
        return response()->json([
            "success" => true
        ]);
    }
}
