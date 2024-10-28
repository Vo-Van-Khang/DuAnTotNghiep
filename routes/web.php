<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\WatchLaterController;


Route::get('/admin/user/list',[UserController::class , 'show'])->name('admin.user.list');
Route::get('/admin/user/update/{id}', [UserController::class, 'edit'])->name('admin.user.update');
Route::post('/admin/user/update',[UserController::class , 'update'])->name('admin.user.update');
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');


Route::get('/admin/category/list', function () {
    return view('admins.category.list');
});
Route::get('/admin/category/add', function () {
    return view('admins.category.add');
});
Route::get('/admin/movie/list', [MovieController::class,'list__admin'])->name("admin.movie.list");
Route::get('/admin/movie/add', function () {
    return view('admins.movie.add');
})->name("admin.movie.add");
Route::post('/admin/movie/add', [MovieController::class,'admin_create'])->name("admin.movie.add");

Route::get('/admin/slides/list', function () {
    return view('admins.slides.list');
});
Route::get("/", [MovieController::class, 'index'])->name('index');
Route::get("/all", [MovieController::class, 'allMovie'])->name('allMovie');
Route::get("/search", [MovieController::class, 'search'])->name('search');
// Route::view('/', 'clients.subscription')->name("index");
Route::view('/about', 'clients.about')->name("about");
Route::view('/contact', 'clients.contact')->name("contact");
Route::view('/subscription', 'clients.subscription')->name("subscription");
Route::view('/signin', 'users.SignIn')->name("signin");
Route::view('/signup', 'users.SignUp')->name("signup");
Route::view('/forgot', 'users.forgot')->name("forgot");
Route::get('/profile', [UserController::class,'get'])->name("profile");
Route::view('/category', 'clients.category')->name("category");
Route::view('/privacy', 'clients.privacy')->name("privacy");

Route::get('/movie/{id}', [MovieController::class,'get_id'])->name("movie");
Route::get('/movie/{movie}/episode/{episode}', [EpisodeController::class,'get_by_movie'])->name("episode");

Route::post('/watch_later/fetch/add', [WatchLaterController::class,'add']);
Route::delete('/watch_later/fetch/remove', [WatchLaterController::class,'remove']);

Route::post('/like/fetch/add', [LikeController::class,'add']);
Route::delete('/like/fetch/remove', [LikeController::class,'remove']);

Route::delete('/watch_later/remove/{id}', [WatchLaterController::class,'remove_by_id']);
