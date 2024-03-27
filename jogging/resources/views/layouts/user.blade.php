<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
</head>
<body>
    <header class="header">

        <p class="title">ジョギング管理アプリケーション</p>
        <div class=menu>
            <p class="top"><a href="#">Top</a></p>
            <p class="date"><a href="#">データ入力</a></p>
            <p class="rank"><a href="#">ランキング</a></p>
            <p class="hikaku"><a href="#">データ比較</a></p>
            <p class="mypage"><a href="#">Mypage</a></p>
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



</body>
</html>