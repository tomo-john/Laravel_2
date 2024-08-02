<!DOCTYPE html>
<html>
<head>
    <title>Laravel John</title>
    <!-- JavaScript -->

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- 共通のヘッダー -->
    <header style="border-bottom: 1px solid #ccc; padding: 10px; display: flex; justify-content: space-between;">
        <div>
          <a href="{{ url('/') }}" style="text-decoration: none;">Laravel John</a>
        </div>
        <div>
          <a href="#" style="margin-right: 15px;">じょん1</a>
          <a href="#" style="margin-right: 15px;">じょん2</a>
          <a href="#">じょん3</a>
    </header>

    <!-- 共通のナビゲーション -->
    <nav>

    </nav>

    <!-- メインコンテンツ(各ビューかれ提供されるコンテンツ) -->
    <div class="container">
        @yield('content')
    </div>

    <!-- 共通のフッター -->
    <footer>

    </footer>
</body>
</html>

