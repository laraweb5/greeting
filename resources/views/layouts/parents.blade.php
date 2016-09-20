<!-- resources/views/layouts/parent.blade.php -->
<!-- 親となるテンプレート -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 <div class="container">
  <h1>@yield('title')</h1>
  @yield('content')
  </div>
</body>
</html>
