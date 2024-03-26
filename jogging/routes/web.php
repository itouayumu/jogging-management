<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\joggingcontroller;
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('index',[joggingcontroller::class,'index']);
Route::get('top',[joggingcontroller::class,'top']);
Route::get('sab',[joggingcontroller::class,'sab']);
Route::get('data',[joggingcontroller::class,'data']);

