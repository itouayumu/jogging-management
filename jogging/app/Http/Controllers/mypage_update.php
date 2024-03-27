<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mypage_update extends Controller
{
    public function update()
    {
        return view('jogging.mydate_update');
    }

    public function date_comparison() 
    {
        return view('comparison.date_comparison');
    }
}
