<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function admin__view(){
        $categories = DB::table("categories")->get();
        return view("admins.category.list",[
            "categories" => $categories,
            "selected" => "category"
        ]);
    }
    public function admin__add(){
        return view("admins.category.add",[
            "selected" => "category"
        ]);
    }
}
