@extends('layouts.user')

@section('title', 'Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/date_comparison.css') }}">

@section('content')

<div class="date_1">
    <h2>月別のデータ</h2>
    <a href="">全体のランキングはこちら</a>
</div>

<div class="date_2">
    <h2>年別のデータ比較</h2>
</div>

<button>戻る</button>

@endsection