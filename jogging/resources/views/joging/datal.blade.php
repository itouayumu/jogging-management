@extends('layouts.user')

@section('title','Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/datal.css') }}">
@section('content')
<div class="data_1">
    <p>走行距離：{{$data->distance}}</p>
    <P>走行時間：{{$data->time}}</P>
</div>
<img src="{{asset('storage/img/'.$data->img_pass)}}" alt="ジョギング画像" >

@endsection


