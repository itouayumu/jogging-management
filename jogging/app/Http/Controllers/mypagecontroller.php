<?php

namespace App\Http\Controllers;
use App\Http\Controllers\mypagecontroller;

use Illuminate\Http\Request;

class mypagecontroller extends Controller
{
    public function mypage(Request $request){
        return view('jogging.mypage');
}
}
