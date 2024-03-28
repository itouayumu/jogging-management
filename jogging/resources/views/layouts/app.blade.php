<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('/css/log_reg.css') }}">
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

   
    <link rel="stylesheet" href="{{ asset('/css/+a.css') }}">
</head>
<body>
    <div id="app">
        <header class="header">
                <a href="{{ url('/') }}" class="title">
                   ジョギング管理
                </a>
                <div class=menu>
               <p class="nav-link"> <a class="nav-link" href="{{ route('login') }}">Login</a></p>
               <p class="nav-link"> <a class="nav-link" href="{{ route('register') }}">新規登録</a></p>
                </div>
        </header>
            @yield('content')
        </main>
    </div>
    <img src="{{asset('storage/img/back.png')}}" alt="背景" class="back">
</body>
</html>
