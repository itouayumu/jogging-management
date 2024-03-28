@extends('layouts.user')

@section('title','Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/datal.css') }}">
@section('content')
<h1>ジョギングデータ</h1>
<div class="layout">
    <div class="data_1">
        @if($data->status = 0)
        <p class="status1"style= "background-color:aquamarine; text-align: center; border-radius: 5px;padding: 20px;">室内</p>
        @else
        <p class="status2" style="background-color:aqua;text-align: center; border-radius: 10px;padding: 5px;">室外</p>
        @endif
        <div>
            <div class="data">
                <p>日付：{{$data->run_day}}</p>
                <p>走行距離：{{$data->distance}}km</p>
                <P>走行時間：{{$data->time}}時間</P>
            </div>
        </div>
</div>
<div class="img">
    <img src="{{asset('storage/img/'.$data->img_pass)}}" alt="ジョギング画像" class="j_img" >
</div>
</div>
<a class="back_a"href="top">戻る</a>
<a class="update"href="data_update?sort={{$data->run_day}}">編集する</a>
@endsection


