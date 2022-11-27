<!DOCTYPE html>
<html lang="ja">

<head>
    <title>@yield('title', 'admin用')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap">
    <link rel="stylesheet" href="/css/admin/tailwind/tailwind.min.css">
    <link rel="stylesheet" href="/css/admin/admin.style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">

    <script src="/js/main.js"></script>
    <script src="/js/admin/jquery-3.6.0.slim.min.js"></script>
    <script src="/js/admin/select2.min.js"></script>

</head>

<body class="antialiased bg-body text-body font-body">

    <!-- ▼▼▼▼共通ヘッダー▼▼▼▼　-->
    <header>
        <h1>管理者用ページ</h1>
        @if (Auth::guard('administrators')->check())
            <div>ユーザーID: {{ Auth::guard('administrators')->user()->email }}でログイン中</div>
        @endif
    </header>
    <!-- ▲▲▲▲共通ヘッダー▲▲▲▲　-->

    <!-- ▼▼▼▼ページ毎の個別内容▼▼▼▼　-->
    <main>
        @yield('content')
    </main>
    <!-- ▲▲▲▲ページ毎の個別内容▲▲▲▲　-->

    <!-- ▼▼▼▼共通フッター▼▼▼▼　-->
    <footer class="bg-black">

        <p style="text-align:center; font-size:.6875rem">©タカハシ</p>
    </footer>
    <!-- ▲▲▲▲共通フッター▲▲▲▲　-->
</body>

</html>
