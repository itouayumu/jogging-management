<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class joggingController extends Controller
{
    //
    public function data_regist(){
       return view('jogging.data_regist');
    }
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
    
    public function data_regist_result(Request $request)
    {
        $user = Auth::user()->name;
        $run = $request->run;
        $time = $request->time;
        $area = $request->area;
        $status = $request->status;
        $day=now()->format('Y年m月d日');
        $img_name = $user.'_'.$day.'.jpeg';
        $request->file('img')->storeAs('public/img', $img_name);
        $param =[
            'user_id'=>Auth::user()->id,
            'distance'=>$run,
            'time'=>$time,
            'address'=>$area,
            'statusflag'=>$status,
            'img_pass'=>$img_name
        ];
        DB::table('data')->insert($param);
        return redirect('/top');
            }

}

