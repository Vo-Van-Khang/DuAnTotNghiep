<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    Public function index(){
        $movies = Movies::with('categories')->get();
        return view('/clients/HomePage', ['movies' => $movies]);
    }
}
