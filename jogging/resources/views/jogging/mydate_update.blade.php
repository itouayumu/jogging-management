@extends('layouts.user')

@section('title', 'Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/mypage_update.css') }}">

@section('content')
<h2>アカウント情報</h2>

<form action="#" method="post">
    <div class="account_all">

       <div class="account_1">

         <div> <p>アイコン</p> </div>
        <div>    
         <label>アカウント名</label>
         <input type="text" name="name"> 
        </div>
        <div>
         <label>ランキング登録名</label>
         <input type="text" name="ranking_name">
        </div>
        <div>
         <label>メールアドレス</label>
         <input type="text" name="email">
        </div>
        <div>
         <label>年齢</label>
         <input type="number" name="age" >歳
        </div>
        <div>
         <label>目標設定</label>
          <div>
            <input type="checkbox">
            <label for="">ダイエット</label>

            <input type="checkbox">
            <label for="">健康維持</label>

        </div>
    </div>
</div>
<div class="account_2">
    <div>
        <label for="">体重</label>
        <input type="number">kg
    </div>
    <div>
        <label for="">身長</label>
        <input type="number">cm
    </div>

    
<div class="button">
<input type="button" value="編集完了">
<input type="button" value="戻る">

</div>

</div>


</div>


</form>
@endsection