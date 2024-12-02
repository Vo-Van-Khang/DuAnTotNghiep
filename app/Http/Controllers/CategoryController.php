<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    public function category($id){
        $category = Categories::with("movies")->where("id",$id)->first();
        return view('clients.category', ['category' =>$category]);
    }
    public function get(){
        $data = Categories::with("movies")
        ->paginate(request()->input('per_page', 8), ['*'], 'page', request()->input('page', 1));
        return view('admins/category/list', ['categories' =>$data, "selected" => "category"]);
    }
    public function add(){
        return view ('admins/category/add',["selected" => "category"]);
    }
    public function create(Validate $request){
        $validated = $request->validated();
        $name = $request->input('name');
        $Category = New Categories();
        $Category->name= $name;
        if($Category->save()){
            return redirect('admin/category/list');
        }
    }
    public function edit($id){
        $category= Categories::find($id);
        return view('admins/category/update', ['category' => $category, "selected" => "category"]);
    }
    public function update(Validate $request, $id){
        $validated = $request->validated();
        $name = $request->input('name');
        $categoryUpdate = Categories::find($id);
        $categoryUpdate->name = $name;
        if($categoryUpdate->save()){
            return redirect('admin/category/list');
        }
}

public function delete($id){
    $categoryDelete = Categories::find($id);
    if($categoryDelete->delete()){
        return response()->json([
            "success" => true
        ]);
    }
}
}
