<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
</head>
<body>
    <header class="header">
        <p>ジョギ管</p>
        <p><a href="#">top</a></p>
        <p><a href="#">データ入力</a></p>
        <p><a href="#">ランキング</a></p>
        <p><a href="#">データ比較</a></p>
    </header>
@section('content')
    
            @yield('content')



</body>
</html>