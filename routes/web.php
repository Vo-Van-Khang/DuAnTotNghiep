<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WatchLaterController;


Route::get('/admin/category/list', [CategoryController::class,'admin__view'])->name("admin.category.list");
Route::get('/admin/category/add', [CategoryController::class,'admin__add'])->name("admin.category.add");
Route::get('/admin/category/update/{id}', [CategoryController::class,'admin__update'])->name("admin.category.update");

Route::get('/admin/movie/list', [MovieController::class,'admin__view'])->name("admin.movie.list");
Route::get('/admin/movie/add', [MovieController::class,'admin__add'])->name("admin.movie.add");
Route::post('/admin/movie/add', [MovieController::class,'admin__create'])->name("admin.movie.add");
Route::get('/admin/movie/update/{id}', [MovieController::class,'admin__update__form'])->name("admin.movie.update");
Route::post('/admin/movie/update/{id}', [MovieController::class,'admin__update'])->name("admin.movie.update");
Route::delete('/admin/movie/delete/{id}', [MovieController::class,'admin__delete']);
Route::post('/admin/movie/status/update/{id}',[MovieController::class,'admin__status__update']);
Route::delete('/admin/movie/url/remove/{id}',[MovieController::class,'admin__remove__url']);

// Route::get('/admin/episode/list', [EpisodeController::class,'admin__view'])->name("admin.episode.list");
Route::get('/admin/episode/add/{id}', [EpisodeController::class,'admin__add'])->name("admin.episode.add");
Route::post('/admin/episode/add/{id}', [EpisodeController::class,'admin__create'])->name("admin.episode.add");
Route::get('/admin/episode/update/{movie}/{id}', [EpisodeController::class,'admin__update__form'])->name("admin.episode.update");
Route::post('/admin/episode/update/{movie}/{id}', [EpisodeController::class,'admin__update'])->name("admin.episode.update");
Route::delete('/admin/episode/delete/{id}', [EpisodeController::class,'admin__delete']);
Route::delete('/admin/episode/url/remove/{id}',[EpisodeController::class,'admin__remove__url']);

Route::get('/admin/user/list',[UserController::class , 'show'])->name('admin.user.list');
Route::get('/admin/user/update/{id}', [UserController::class, 'edit'])->name('admin.user.update');
Route::post('/admin/user/update',[UserController::class , 'update'])->name('admin.user.update');
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');

Route::get('/admin/slide/list', [SlideController::class,'admin__view'])->name("admin.slide.list");
Route::get('/admin/slide/add', [SlideController::class,'admin__add'])->name("admin.slide.add");
Route::get('/admin/slide/update/', [SlideController::class,'admin__update'])->name("admin.slide.update");

Route::get("/", [MovieController::class, 'index'])->name('index');
Route::view('/about', 'clients.about')->name("about");
Route::view('/contact', 'clients.contact')->name("contact");
Route::view('/subscription', 'clients.subscription')->name("subscription");
Route::view('/category', 'clients.category')->name("category");
Route::view('/privacy', 'clients.privacy')->name("privacy");

Route::view('/signin', 'users.SignIn')->name("signin");
Route::view('/signup', 'users.SignUp')->name("signup");
Route::view('/forgot', 'users.forgot')->name("forgot");
Route::get('/profile', [UserController::class,'get'])->name("profile");

Route::get('/movie/{id}', [MovieController::class,'get_id'])->name("movie");
Route::get('/movie/{movie}/episode/{episode}', [EpisodeController::class,'get_by_movie'])->name("episode");

Route::post('/watch_later/fetch/add', [WatchLaterController::class,'add']);
Route::delete('/watch_later/fetch/remove', [WatchLaterController::class,'remove']);

Route::post('/like/fetch/add', [LikeController::class,'add']);
Route::delete('/like/fetch/remove', [LikeController::class,'remove']);

Route::delete('/watch_later/remove/{id}', [WatchLaterController::class,'remove_by_id']);