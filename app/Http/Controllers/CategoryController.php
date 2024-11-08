<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
  public function get(){
        $data = db::table('categories')->select('*')->get();
        return view('admins/category/list', ['categories' =>$data, "selected" => "category"]);
    }
    public function add(){
        return view ('admins/category/add',["selected" => "category"]);
    }
    public function create(Request $request){
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
    public function update(Request $request, $id){
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
