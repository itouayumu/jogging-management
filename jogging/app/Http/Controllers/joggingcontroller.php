<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class joggingController extends Controller
{
    //
    public function data_regist(){
        $area = DB :: table('area')->get();
       return view('jogging.data_regist',['data'=>$area]);

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

    public function trivia(){
        return view('trivia.trivia');
    }
    public function data(Request $request)
    {
        $queryParameters = $request->query();
        $item = DB :: table('data')->where('run_day',$queryParameters)->select('id')->first();
        if ($item === null) {
            return redirect('top');
        }
        $items = DB :: table('data')->where('run_day',$queryParameters)->first();
        return view('joging.datal',['data'=>$items]);
    }
    
    public function data_regist_result(Request $request)
    {
        $item = DB :: table('area')->where('name',$request->area)->select('id')->first();
        if ($item === null) {
            $area_param =[
                'name'=>$request->area,
            ];
            DB::table('area')->insert($area_param);
        }
        $user = Auth::user()->name;
        $run = $request->run;
        $time = $request->time;
        $status = $request->status;
        $area = $request->area;
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
            public function data_update(Request $request)
            {
                $area = DB :: table('area')->get();
                $user_id = Auth::id();
                $day = $request->query();
                $item = DB :: table('data')->where('user_id',$user_id)->where('run_day',$day)->first();
                return view('jogging.data_update',['data'=>$item,'area'=>$area]);
            }

}


