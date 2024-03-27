@extends('layouts.user')

@section('title', 'Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/mypage.css') }}">

@section('content')
<h1>アカウント情報</h1>
<div class="container">
    <div class="content1">
    
        <div class="box">
            <h2>アイコン</h2>
            <img src="" alt="Icon" width="100">
        </div>
        <div class="box">
            <h2>アカウント名</h2>
            <input type="text">
        </div>
        <div class="box">
            <h2>メールアドレス</h2>
            <div class="info-box">
                <input type="text">
            </div>
        </div>
        <div class="box">
            <h2>年齢</h2>
            <div class="info-box">
                <input type="number">歳
            </div>
        </div>
        </div>
        <div class="content2">
        <div class="box">
            <h2>目標設定</h2>
            <div class="info-box">
                <input type="checkbox" name="diet">ダイエット
                <input type="checkbox" name="health">健康維持
            </div>
        </div>
        <div class="box">
            <h2>体重</h2>
            <div class="info-box">
                <input type="number">kg
            </div>
        </div>
        <div class="box">
            <h2>身長</h2>
            <div class="info-box">
                <input type="number">cm
            </div>
        </div>
        <button class="edit-button">編集完了</button>
        <a href="mypage"><button class="top-button">戻る</button></a>
    </div>
</div>
@endsection