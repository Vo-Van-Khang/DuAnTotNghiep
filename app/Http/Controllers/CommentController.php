<?php

namespace App\Http\Controllers;
use App\Http\Controllers\comment\comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function comment__add($id_movie)
    {
        $id = DB::table("comments")->insertGetId([
            "id_movie" => $id_movie,
            "id_user" => 1,
            "content" => request("comment__content")
        ]);
        $comment = DB::table("comments")->where("id", $id)->first();
        $user = DB::table("users")->where("id", 1)->first();

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
    public function index($id_movie)
    {
        $comments = DB::table('comments')
            ->where('id_movie', $id_movie)
            ->where('isDeleted', 0)
            ->get();

        return view('comments.index', compact('comments', 'id_movie'));
    }
    public function someFunction()
    {
        $id_movie = 1; // Hoặc lấy từ database
        return view('layouts.layout-admin', compact('id_movie'));
    }
    public function show($id_movie)
    {
        $comments = Comment::where('movie_id', $id_movie)->get();
        return view('index', compact('comments', 'id_movie'));
    }
    // Hiển thị bình luận cho một bộ phim cụ thể (nếu cần)
    public function showComments($id_movie)
    {
        return view('comments.index', compact('id_movie'));
    }

    // Chỉnh sửa bình luận
    public function edit($id)
    {
        $comment = DB::table('comments')->where('id', $id)->first();

        if (!$comment) {
            return redirect()->back()->with('error', 'Bình luận không tồn tại.');
        }

        return view('comments.edit', compact('comment'));
    }

    // Cập nhật bình luận
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $comment = DB::table('comments')->where('id', $id)->first();

        if (!$comment) {
            return redirect()->back()->with('error', 'Bình luận không tồn tại.');
        }

        $updated = DB::table('comments')
            ->where('id', $id)
            ->update([
                'content' => $request->content,
                'updated_at' => now(),
            ]);

        if ($updated) {
            $id_movie = $comment->id_movie; // Lấy id_movie từ bình luận
            return redirect()->route('comments.index', $id_movie)->with('success', 'Bình luận đã được cập nhật.');
        }

        return redirect()->back()->with('error', 'Cập nhật bình luận thất bại.');
    }

    // Xóa bình luận
    public function destroy($id)
    {
        $comment = DB::table('comments')->where('id', $id)->first();

        if (!$comment) {
            return redirect()->back()->with('error', 'Bình luận không tồn tại.');
        }

        $id_movie = $comment->id_movie;

        // Đánh dấu bình luận là đã xóa
        DB::table('comments')->where('id', $id)->update(['isDeleted' => 1]);

        return redirect()->route('comments.index', $id_movie)->with('success', 'Bình luận đã được xóa.');
    }

    // Hiển thị bình luận bị đánh dấu
    public function flaggedComments()
    {
        $flaggedComments = DB::table('comments')
            ->where('status', 1)
            ->where('isDeleted', 0)
            ->get();

        return view('comments.flagged', compact('flaggedComments'));
    }
}
