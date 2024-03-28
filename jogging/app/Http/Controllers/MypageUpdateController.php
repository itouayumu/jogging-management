<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MypageUpdateController extends Controller{
    
    public function update_mypage(Request $request)
    {
        $user = Auth::user()->name;
        $name = $request->name;
        $mail = $request->mail;
        $age = $request->age;
        $radio = $request->radio;
        $weight = $request->weight;
        $tall = $request->tall;
        $day=now()->format('Y年m月d日');
        $img = $user.'_'.$day.'.jpeg';
        $request->file('img')->storeAs('public/img', $img);
        $param =[
            'name'=>$name,
            'mail'=>$mail,
            'age'=>$age,
            'goal'=>$radio,
            'icon_imgpass'=>$img,
            'weight'=>$weight,
            'tall'=>$tall
        ];
        DB::table('users')->where()->update($param);
        return redirect('/mypage');
            }
}