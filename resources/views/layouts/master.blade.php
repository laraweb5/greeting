{{-- 親テンプレート --}}
{{-- resources/layouts/master.blade.php --}}
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- InternetExplorerのブラウザではバージョンによって崩れることがあるので、互換表示をさせないために設定するmetaタグです。 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- レスポンシブWebデザインを使うために必要なmetaタグです。 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<!-- コンパイルして圧縮された最新版の CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<!-- オプションのテーマ -->
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 10px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
</style>
</head>

<body>
 
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/greeting">簡易フォーム</a>
    </div>
  <div id="navbar" class="collapse navbar-collapse">
        <?php $var = $_SERVER["REQUEST_URI"]; ?>
        <?php $link_navi = ""; ?>
        <?php if(preg_match("/greeting$/", $var)){ $link_navi = "入力フォーム"; } ?>
        <?php if(preg_match("/all/", $var)){ $link_navi = "一覧表示"; } ?>
        <ul class="nav navbar-nav">
          <li @if($link_navi=='入力フォーム')class="active"@endif><a href="/greeting">入力フォーム</a></li>
          <li @if($link_navi=='一覧表示')class="active"@endif><a href="/greeting/all">一覧表示</a></li>        
        </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>
{{-- ↑↑↑　今回はここ(メニュー)を追加します。　↑↑↑ --}} 

<div class="container" style="margin-top: 30px;">
<h2>@yield('title')</h2>
@yield('content')
</div><!-- /container -->

<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>