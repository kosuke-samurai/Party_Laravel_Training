<!DOCTYPE html>
<html lang="ja">

<head>
    <title>@yield('title', '練習用')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/timeline.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <script src="/js/main.js"></script>
</head>

<body class="antialiased bg-body text-body font-body">

    <!-- ▼▼▼▼共通ヘッダー▼▼▼▼　-->
    <header class="header">

        <div class="search_container">
            <input type="text" size="25" value="{{ \Auth::user()->name }}" readonly>
            <input type="submit" value="さまへ" disabled>
        </div>

        <div class="home">
            <a href="/" class="home_back_button">
                <img src="/img/header/home16.jpg" alt="">
                <p class='home_back'> ホーム </p>
            </a>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout_button">
                <img src="/img/header/logout16.jpg" alt="">
                <p class='logout'> ログアウト </p>
            </button>
        </form>
    </header>

    <!-- ▲▲▲▲共通ヘッダー▲▲▲▲　-->

    <!-- ▼▼▼▼ページ毎の個別内容▼▼▼▼　-->
    <main>
        @yield('content')
    </main>
    <!-- ▲▲▲▲ページ毎の個別内容▲▲▲▲　-->

    <!-- ▼▼▼▼共通フッター▼▼▼▼　-->
    <footer class="bg-black">
        <p style="text-align:center; font-size:.6875rem">
            識別番号(admin確認用):{{ \Auth::user()->administrators_id }}-{{ \Auth::user()->id }}</p>
        <p style="text-align:center; font-size:.6875rem">©タカハシ</p>
    </footer>
    <!-- ▲▲▲▲共通フッター▲▲▲▲　-->
</body>

</html>
