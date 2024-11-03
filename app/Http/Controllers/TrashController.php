<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Movies;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TrashController extends Controller
{
    public function admin__view(){
        $movies = Movies::where("isDeleted",1)->get();
        $users = DB::table("users")->where("isDeleted",1)->get();
        $comments = Comments::where("isDeleted",1)->get();
        $notifications = Notifications::where("isDeleted",1)->get();
        return view("admins.trash.list",[
            "movies" => $movies,
            "users" => $users,
            "comments" => $comments,
            "notifications" => $notifications,
            "selected" => "trash"
        ]);
    }

    public function admin__restore($id_restore){
        $type_trash = request('type_trash');
        DB::table("$type_trash" . "s")->where("id",$id_restore)->update([
            "isDeleted" => 0
        ]);
        return response()->json([
            "success" => true
        ]);
    }

    public function admin__movie__remove($id_remove){
        $movie = DB::table("movies")->where("id",$id_remove);

        $urlMovie = DB::table("urls")->where("media_id", $id_remove)->where("type", "movie")->first();
        if ($urlMovie) {
            $moviePath = parse_url($urlMovie->url, PHP_URL_PATH);
            Storage::disk('s3')->delete($moviePath);
            DB::table("urls")->where("id", $urlMovie->id)->delete();
        }

        if (file_exists(public_path($movie->value('thumbnail')))) {
            unlink(public_path($movie->value('thumbnail')));
        }
        $episodes = DB::table("episodes")->where("id_movie",$id_remove)->get();

        foreach ($episodes as $episode) {

            $urlEpisode = DB::table("urls")->where("media_id", $episode->id)->where("type", "episode")->first();
            if ($urlEpisode) {
                $episodePath = parse_url($urlEpisode->url, PHP_URL_PATH);
                Storage::disk('s3')->delete($episodePath);
                DB::table("urls")->where("id", $urlEpisode->id)->delete();
            }

            DB::table("episodes")->where("id", $episode->id)->delete();
        }
        $movie->delete();

        return response()->json([
            "success" => true
        ]);
    }
    public function admin__user__remove($id_remove){
        DB::table("users")->where("id",$id_remove)->delete();
        return response()->json([
            "success" => true
        ]);
    }
    public function admin__comment__remove($id_remove){
        DB::table("comments")->where("id",$id_remove)->delete();
        return response()->json([
            "success" => true
        ]);
    }
    public function admin__notification__remove($id_remove){
        DB::table("notifications")->where("id",$id_remove)->delete();
        return response()->json([
            "success" => true
        ]);
    }
}
