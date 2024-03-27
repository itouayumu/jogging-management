@extends('layouts.user')

@section('title','Index')
@section('css')
<link rel='stylesheet' href="{{ asset('/css/mypage.css')}}">
@section('content')
<div class="container">
    <div class="content1">
    
        <div class="box">
            <h2>アイコン</h2>
            <img src="" alt="Icon" width="100">
        </div>
        <div class="box">
            <h2>アカウント名</h2>
            <p>John Doe</p>
        </div>
        <div class="box">
            <h2>ランキング</h2>
            <p>1st</p>
        </div>
        <div class="box">
            <h2>メールアドレス</h2>
            <div class="info-box">
                <p>john@example.com</p>
            </div>
        </div>
        <div class="box">
            <h2>年齢</h2>
            <div class="info-box">
                <p>30</p>
            </div>
        </div>
        </div>
        <div class="content2">
        <div class="box">
            <h2>目標設定</h2>
            <div class="info-box">
                <p>Exercise 3 times a week</p>
            </div>
        </div>
        <div class="box">
            <h2>体重</h2>
            <div class="info-box">
                <p>70 kg</p>
            </div>
        </div>
        <div class="box">
            <h2>身長</h2>
            <div class="info-box">
                <p>180 cm</p>
            </div>
        </div>
        <div class="box">
            <h2>BMI</h2>
            <div class="info-box">
                <p>21.6</p>
            </div>
        </div>
        <button class="edit-button">編集</button>
        <button class="top-button">戻る</button>
    </div>
</div>
<p>testtets</p>
@endsection




