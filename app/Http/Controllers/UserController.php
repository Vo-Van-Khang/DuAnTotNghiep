<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

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
    public function show(){
        $users = db::table('users')->select('*')->get();
        return view('admins/user/list', ['users' => $users]);
    }

    public function edit($id){
        $userEdit= User::find($id);
        return view('admins/user/update', ['user' => $userEdit]);
    }

    public function update(Request $request){
            $id = $request->input('id');
            $name = $request->input('name');
            $email = $request->input('email');
            $status = $request->input('status');
            $premium = $request->input('premium');
            $role = $request->input('role');
            $userUpdate = User::find($id);
            if ($request->hasFile('image')) {
                $image = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $image);
                $userUpdate->image = $image;
            }
            $userUpdate->name = $name;
            $userUpdate->email = $email;
            $userUpdate->status = $status;
            $userUpdate->premium = $premium;
            $userUpdate->role = $role;
            if($userUpdate->save()){
                return redirect('admin/user/list');
            }
    }
    public function delete($id){
        $userDelete = User::find($id);
        if($userDelete->delete()){
            return redirect('admin/user/list');
}
}
}
