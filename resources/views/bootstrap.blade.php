<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- InternetExplorerのブラウザではバージョンによって崩れることがあるので、互換表示をさせないために設定するmetaタグです。 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- レスポンシブWebデザインを使うために必要なmetaタグです。 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrapテンプレート</title>
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

<div class="container">

<form class="form-signin" role="form">
<p>こんにちは！〇〇さん！！</p>
<input type="text" class="form-control" placeholder="名前を文字を入力してください" required autofocus>
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>

</div><!-- /container -->

<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>