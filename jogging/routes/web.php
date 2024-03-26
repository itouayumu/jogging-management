<?php


use App\Http\Controllers\joggingController;

use App\Http\Controllers\mypage_update;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('data_regist',[joggingController::class,'data_regist']);
// Route::get('data_regist',[コントローラー名::class,'処理の名前']);
// Route::get('image',[test::class,'image']);
// Route::post('img',[test::class,'img']);

Route::get('update',[mypage_update::class,'update']);