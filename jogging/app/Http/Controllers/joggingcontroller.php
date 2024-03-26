<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joggingcontroller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function top()
    {
        return view('joging.top');
    }
    public function sab()
    {
        return view('joging.sab');
    }
    public function data(Request $request)
    {
        $queryParameters = $request->query();
        $items = DB :: table('data')->where('created_at',$queryParameters)->first();
        return view('joging.sab',['data'=>$items]);
    }
}
