<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Watch_laters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function get(Request $request)
{
    $watch_laters = Watch_laters::with('get_movies')->where('id_user', 1)->get();
    $user = User::findOrFail(4);
    if ($request->isMethod('post')) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $userUpdate = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];
        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete($user->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $userUpdate['image'] = $imagePath;
        }
        $user->update($userUpdate);
        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }
    return view('users.profile', [
        'watch_laters' => $watch_laters,
        'user' => $user,
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
        $users = db::table('users')->select('*')->where("isDeleted", 0)->get();
        return view('admins/user/list', ['users' => $users ,  "selected" => "user"]);
    }

    public function edit($id){
        $userEdit= User::find($id);
        return view('admins/user/update', ['user' => $userEdit,"selected" => "user"]);
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
        $userDelete->isDeleted = 1;
        if($userDelete->save()){
            return response()->json([
                "success" => true
            ]);
        }
    }
}
