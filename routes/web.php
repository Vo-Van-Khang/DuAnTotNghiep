<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\WatchLaterController;

Route::get('/admin/user/list', function () {
    return view('admins.user.list');
});
Route::get('/admin/user/add', function () {
    return view('admins.user.update');
});
Route::get('/admin/category/list', function () {
    return view('admins.category.list');
});
Route::get('/admin/category/add', function () {
    return view('admins.category.add');
});
Route::get('/admin/movie/list', [MovieController::class,'list__admin'])->name("admin.movie.list");
Route::get('/admin/movie/add', function () {
    return view('admins.movie.add');
});
Route::get('/admin/slides/list', function () {
    return view('admins.slides.list');
});
Route::get("/", [MovieController::class, 'index'])->name('index');
// Route::view('/', 'clients.subscription')->name("index");
Route::view('/about', 'clients.about')->name("about");
Route::view('/contact', 'clients.contact')->name("contact");
Route::view('/subscription', 'clients.subscription')->name("subscription");
Route::view('/signin', 'users.SignIn')->name("signin");
Route::view('/signup', 'users.SignUp')->name("signup");
Route::view('/forgot', 'users.forgot')->name("forgot");
Route::view('/profile', 'users.profile')->name("profile");
Route::view('/category', 'clients.category')->name("category");
Route::view('/privacy', 'clients.privacy')->name("privacy");

Route::get('/movie/{id}', [MovieController::class,'get_id'])->name("movie");
Route::get('/movie/{movie}/episode/{episode}', [EpisodeController::class,'get_by_movie'])->name("episode");

Route::post('/watch_later/add', [WatchLaterController::class,'add']);
Route::delete('/watch_later/remove', [WatchLaterController::class,'remove']);
Route::get('/ajax/movie/check/{id}', [AjaxController::class,'check_movie']);