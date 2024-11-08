<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WatchLaterController;
use App\Http\Controllers\ReplyCommentController;
use App\Http\Controllers\CommentFilterController;

//ADMIN
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

Route::get('/admin/comment_filter/list', [CommentFilterController::class,'listAdmin'])->name("admins.comment_filter.list");
Route::get('/admin/comment_filter/add', function () {
    return view('admins.comment_filter.add',["selected" => "comment_filter"]);
})->name("admins.comment_filter.add");
Route::get('/admin/comment_filters', [CommentFilterController::class, 'listAdmin'])->name('comment_filter.listAdmin');
Route::post('/admin/comment_filter/add', [CommentFilterController::class,'create'])->name("admin.comment_filter.add");
Route::post('/admin/comment_filters/store', [CommentFilterController::class, 'store'])->name('comment_filter.store');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/admin/comment_filter/delete/{id}', [CommentFilterController::class,'destroy']);

Route::get('/admin/slide/list', [SlideController::class,'admin__view'])->name("admin.slide.list");
Route::get('/admin/slide/add', [SlideController::class,'admin__add'])->name("admin.slide.add");
Route::post('/admin/slide/add', [SlideController::class,'admin__create'])->name("admin.slide.add");
Route::get('/admin/slide/update/{id}', [SlideController::class,'admin__update__form'])->name("admin.slide.update");
Route::post('/admin/slide/update/{id}', [SlideController::class,'admin__update'])->name("admin.slide.update");
Route::delete('/admin/slide/delete/{id}', [SlideController::class,'admin__delete']);
Route::post('/admin/slide/status/update/{id}',[SlideController::class,'admin__status__update']);

Route::get('/admin/trash/list', [TrashController::class,'admin__view'])->name("admin.trash.list");
Route::post('/admin/trash/restore/{id}', [TrashController::class,'admin__restore']);
Route::post('/admin/trash/movie/remove/{id}', [TrashController::class,'admin__movie__remove']);
Route::post('/admin/trash/user/remove/{id}', [TrashController::class,'admin__user__remove']);
Route::post('/admin/trash/comment/remove/{id}', [TrashController::class,'admin__comment__remove']);
Route::post('/admin/trash/notification/remove/{id}', [TrashController::class,'admin__notification__remove']);
Route::post('/admin/trash/slide/remove/{id}', [TrashController::class,'admin__slide__remove']);


Route::get('/admin/payment/list', function () {
    return view('admins.payment.list');
});
Route::get('/admin/payment/list', [PaymentController::class, 'listpayment']);
Route::get('/admin/payment/add', function () {
    return view('admins.payment.add');
});
Route::post('/admin/payment/add', [PaymentController::class, 'addpayment']);
Route::get('/admin/payment/update', function () {
    return view('admins.payment.update');
});
Route::get('/admin/payment/delete/{maxoa}', [PaymentController::class, 'deletepayment']);


//CLIENT
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
Route::get('/search', [MovieController::class,'search'])->name("search");

Route::get('/movie/{id}', [MovieController::class,'get_id'])->name("movie");
Route::get('/movie/{movie}/episode/{episode}', [EpisodeController::class,'get_by_movie'])->name("episode");

Route::post('/movie/like/{id}', [LikeController::class,'like']);
Route::post('/movie/watch_later/{id}', [WatchLaterController::class,'watch_later']);

Route::delete('/watch_later/remove/{id}', [WatchLaterController::class,'remove_by_id']);
Route::delete('/history/remove/{id}', [HistoryController::class,'remove_by_id']);

Route::get('/movie/ajax/{id}', [AjaxController::class,'movie']);
Route::post('/movie/{id}/comment/add', [CommentController::class,'comment__add']);
Route::post('/movie/{id}/reply_comment/add', [ReplyCommentController::class,'reply__comment__add']);

Route::delete('/comment/remove/{id}', [CommentController::class,'remove_by_id']);
Route::delete('/reply_comment/remove/{id}', [ReplyCommentController::class,'remove_by_id']);

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/verify/{token}', function ($token) {
    $user = DB::table('users')->where('remember_token', $token)->first();

    if (!$user) {
        return redirect()->route('signin')->with('error', 'Token không hợp lệ.');
    }

    DB::table('users')->where('id', $user->id)->update([
        'email_verified_at' => now(),
        'status' => '0',
        'remember_token' => null,
    ]);

    return redirect()->route('signin')->with('success', 'Email của bạn đã được xác nhận. Vui lòng đăng nhập.');
})->name('verify');
Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password.form');
Route::post('/forgot-password', [UserController::class, 'sendReset'])->name('forgot-password.send');
Route::get('/reset-password/{token}', [UserController::class, 'resetPasswordForm'])->name('reset-password.form');
Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('reset-password.update');
