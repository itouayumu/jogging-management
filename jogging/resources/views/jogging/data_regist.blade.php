@extends('layouts.user')

@section('title', 'Index')
@section('css')

<!-- <link rel="stylesheet" href="{{ secure_asset('/css/data_regist.css')  }}" > --><!--SSH化した通信しか使わない場合はsecureを付ける -->
<link rel="stylesheet" href="{{ asset('/css/data_regist.css') }}" >

@section('content')

<h1>
    データ入力
</h1>
<div class="form">
    <form class="flex" action="" method="post" enctype="multipart/form-data">        
        <div class="back">
            <div><a href=""><button type="button">戻る</button></a></div>
        </div>
        <table>
        <tr>
            <td>
                走行距離
            </td>
            <td>
            <div class="run"><input type="text" name="run">km</div>
            </td>
        </tr>
        <tr>
            <td>
                時間
            </td>
            <td>
            <div class="time"><input type="text" name="time">時間</div>
            </td>
        </tr>
        <tr>
            <td>
            走った地域
            </td>
            <td>
            <div class="area"><input type="text" name="area"></div>
            </td>
        </tr>
        <tr>
            <td>
            コース情報を入力
            </td>
            <td>
            <div class="img_display">
                <div class="img-bg">
                    <img id="preview" alt="画像を添付してください" width="400px" height="auto">
                </div>
            </div>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            <div class="img">
                <input type="file" name="img" onchange="previewFile(this);">
            </div>
            </td>
        </tr>
        </table>
        <div class="regist"><input type="submit" name="regist" value="登録"></div>
    </form>
</div>


<!-- script -->

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