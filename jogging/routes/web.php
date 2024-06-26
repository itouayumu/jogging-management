<?php



use App\Http\Controllers\MypageUpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mypagecontroller;


use App\Http\Controllers\joggingController;


use App\Http\Controllers\mypage_update;
Route::get('/', function () {
    return view('auth.login');
});




Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('mypage',[mypagecontroller::class,'mypage']);

Route::get('index',[joggingcontroller::class,'index']);
Route::get('top',[joggingcontroller::class,'top']);
Route::get('sab',[joggingcontroller::class,'sab']);
Route::get('data_regist',[joggingcontroller::class,'data_regist']);
Route::post('data_regist',[joggingcontroller::class,'data_regist_result']);
Route::get('mydate_update',[MypageUpdateController::class,'update_mypage']);
Route::post('mydate_update',[MypageUpdateController::class,'update_mypage']);
Route::get('data',[joggingcontroller::class,'data']);
Route::get('data_update',[joggingcontroller::class,'data_update']);
Route::post('data_update',[joggingcontroller::class,'data_update_result']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('data_regist',[joggingController::class,'data_regist']);
// Route::get('data_regist',[コントローラー名::class,'処理の名前']);
// Route::get('image',[test::class,'image']);
// Route::post('img',[test::class,'img']);

Route::get('update',[mypage_update::class,'update']);


Route::get('date_comparison',[mypage_update::class,'date_comparison']);
Route::get('trivia',[joggingcontroller::class,'trivia']);
