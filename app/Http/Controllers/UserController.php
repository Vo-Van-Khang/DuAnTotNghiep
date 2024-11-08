<?php

namespace App\Http\Controllers;

use App\Models\Histories;
use App\Models\Movies;
use App\Models\Watch_laters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordMail;

class UserController extends Controller
{

    // public function get(){
    //     $watch_laters = Watch_laters::whereHas('movie', function($query) {
    //             $query->where('isDeleted', 0)->where('status', 1);
    //         })->where("id_user", 1)->orderBy("id","desc")->get();
    //     $histories = Histories::whereHas('movie', function($query) {
    //             $query->where('isDeleted', 0)->where('status', 1);
    //         })->where("id_user", 1)->orderBy("created_at","desc")->get();

    //     return view('users.profile',[
    //         'watch_laters'=>$watch_laters,
    //         'histories'=>$histories,
    //     ]);
    // }
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

public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'name.required' => 'Vui lòng nhập tên của bạn.',
            'name.string' => 'Tên phải là chuỗi ký tự.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',

            'email.required' => 'Vui lòng nhập email.',
            'email.string' => 'Email phải là chuỗi ký tự.',
            'email.email' => 'Email không hợp lệ.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'email.unique' => 'Email này đã tồn tại trong hệ thống.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',

            'image.image' => 'File phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg, gif, hoặc svg.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        $existingUser = DB::table('users')->where('email', $request->email)->first();

        if ($existingUser) {
            return back()->withErrors(['email' => 'Email này đã được đăng ký. Vui lòng thử một email khác.']);
        }

        // Xử lý ảnh
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/users'), $imageName);
        } else {
            $imageName = 'user.jpg';
        }

        if (!file_exists(public_path('images/users'))) {
            mkdir(public_path('images/users'), 0755, true);
        }

        $userId = DB::table('users')->insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imageName,
            'role' => 'user',
            'email_verified_at' => null,
            'status' => '1',
            'premium' => false,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user = DB::table('users')->where('id', $userId)->first();

        try {
            Mail::to($request->email)->send(new UserRegistered($user));
        } catch (\Exception $e) {
            return redirect()->route('signin')->with('error', 'Đăng ký thành công nhưng không thể gửi email xác nhận.');
        }

        return redirect()->route('signin')->with('success', 'Đăng ký thành công, vui lòng kiểm tra email để xác nhận tài khoản.');
    }
    public function forgotPassword()
    {
        return view('users.forgot');
    }
    public function sendReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.exists' => 'Email này không tồn tại trong hệ thống.'
        ]);

        $email = $request->email;


        $resetUrl = url('/reset-password/' . base64_encode($email));

        Mail::to($email)->send(new ResetPasswordMail($resetUrl));

        return back()->with('success', 'Mã xác nhận đã được gửi. Vui lòng kiểm tra email của bạn.');
    }



    public function resetPasswordForm($encodedEmail)
    {

        $email = base64_decode($encodedEmail);

        return view('users.reset', compact('email'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.required' => 'Vui lòng nhập email của bạn.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.exists' => 'Email này không tồn tại trong hệ thống.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);


        $email = $request->email;
        $password = $request->password;


        DB::table('users')->where('email', $email)->update([
            'password' => Hash::make($password),
        ]);

        return redirect()->route('signin')->with('success', 'Mật khẩu đã được đặt lại thành công.');
    }
}
