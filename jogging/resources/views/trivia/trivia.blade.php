@extends('layouts.user')

@section('title', 'Index')
@section('css')

<!-- <link rel="stylesheet" href="{{ secure_asset('/css/data_regist.css')  }}" > --><!--SSH化した通信しか使わない場合はsecureを付ける -->
<link rel="stylesheet" href="{{ asset('/css/trivia.css') }}" >

@section('content')

<div class=heading>
    <h1>豆知識一覧</h1>

    <div>お気に入りのみ表示<input type="checkbox" name=favorite></div>
</div>


@endsection