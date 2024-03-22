<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mypage_update;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('update',[mypage_update::class,'update']);






