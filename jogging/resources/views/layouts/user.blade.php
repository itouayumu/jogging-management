<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
</head>
<body>
    <header class="header">

        <a class="title" href="top">ジョギング管理アプリケーション</a>
        <div class=menu>
            <p class="top"><a href="top">Top</a></p>
            <p class="date"><a href="data_regist">データ入力</a></p>
            <p class="rank"><a href="#">ランキング</a></p>
            <p class="hikaku"><a href="#">データ比較</a></p>
            <p class="mypage"><a href="mypage">Mypage</a></p>
            <div class="logout" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
        </div>


    </header>
@section('content')
    
            @yield('content')

<img src="{{asset('storage/img/back.png')}}" alt="背景" class="back">
</body>
</html>