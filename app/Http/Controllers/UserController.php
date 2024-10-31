<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function get(){
        $watch_laters = DB::table("watch_laters")->where("id_user",1)->get();
        $movies = Movies::get();
        return view('users.profile',[
            'watch_laters'=>$watch_laters,
            'movies'=>$movies
        ]);
    }
    public function admin__view(){
        return view('admins.user.list', [
            "selected" => "user"
        ]);
    }
    public function admin__add(){
        return view('admins.user.add', [
            "selected" => "movie"
        ]);
    }
    public function admin__update(){
        return view('admins.user.update', [
            "selected" => "user"
        ]);
    }
}
