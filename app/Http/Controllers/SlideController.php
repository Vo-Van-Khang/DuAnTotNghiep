<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function admin__view(){
        $movies = Movies::with('get_episodes')->get();
        return view('admins.movie.list', [
            "movies" => $movies,
            "selected" => "movie"
        ]);
    }

    public function admin__add(){
        $categories = DB::table("categories")->get();
        return view('admins.movie.add', [
            "categories" => $categories,
            "selected" => "movie"
        ]);
    }

    public function admin__update(){
        return view('admins.slides.update', [
            "selected" => "slide"
        ]);
    }
}
