@extends('layouts.user')

@section('title', 'Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/mypage.css') }}">

@section('content')
<h1>アカウント情報</h1>
<form action="update_mypage" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="content1">
    
        <div class="box">
            <h2>アイコン</h2>
            <img id="preview" src="" alt="Icon" width="100">
            <input type="file" name="img" onchange="previewFile(this);">
        </div>
        <div class="box">
            <h2>アカウント名</h2>
            <input type="text" name="name">
        </div>
        <div class="box">
            <h2>メールアドレス</h2>
            <div class="info-box">
                <input type="e-mail" name="mail">
            </div>
        </div>
        <div class="box">
            <h2>年齢</h2>
            <div class="info-box">
                <input type="number" name="age">歳
            </div>
        </div>
        </div>
        <div class="content2">
        <div class="box">
            <h2>目標設定</h2>
            <div class="info-box">
               <input type="radio" name="radio" id=diet value="0">
               <label for="diet">ダイエット</label> 
               <input type="radio" name="radio" id=health value="1">
               <label for="health">健康維持</label>
            </div>
        </div>
        <div class="box">
            <h2>体重</h2>
            <div class="info-box">
                <input type="number" name="weight">kg
            </div>
        </div>
        <div class="box">
            <h2>身長</h2>
            <div class="info-box">
                <input type="number" name="tall">cm
            </div>
        </div>

        <button class="edit-button" type=submit>編集完了</button>
        <a href="mypage"><button class="top-button" type="button">戻る</button></a>
    </div>
</div>
</form>

<script>
    function previewFile(hoge){
    var fileData = new FileReader();
    fileData.onload = (function() {
      //id属性が付与されているimgタグのsrc属性に、fileReaderで取得した値の結果を入力することで
      //プレビュー表示している
      document.getElementById('preview').src = fileData.result;
    });
    fileData.readAsDataURL(hoge.files[0]);
  }
</script>
@endsection