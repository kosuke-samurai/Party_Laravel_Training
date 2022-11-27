<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ログイン</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/tailwind/tailwind.min.css">

    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <script src="/js/main.js"></script>
</head>

<body class="antialiased bg-body text-body font-body">
    <div>
        <section class="h-screen py-48 bg-blueGray-50">
            <div class="container px-4 mx-auto">
                <div class="flex max-w-md mx-auto flex-col text-center">
                    <div class="mt-12 mb-8 p-8 bg-white rounded shadow">
                        <h1 class="mb-6 text-2xl">HAVE A WONDERFUL TIME</h1>
                        <p class="mb-6 text-1xl">ログインページ</p>

                        @if ($errors->any())
                            <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
                                <p class="text-red-400">ログインに失敗しました</p>
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="flex mb-4 px-4 bg-blueGray-50 rounded">
                                <input
                                    class="w-full py-4 text-xs placeholder-blueGray-400 font-semibold leading-none bg-blueGray-50 outline-none"
                                    type="text" placeholder="氏名（※姓と名の間は半角ナシで入力してください）" name="name"
                                    value="{{ old('name') }}">

                            </div>

                            <div class="flex mb-6 px-4 bg-blueGray-50 rounded">
                                <input
                                    class="w-full py-4 text-xs placeholder-blueGray-400 font-semibold leading-none bg-blueGray-50 outline-none"
                                    type="text" placeholder="パスワード（※不明の場合は担当者に聞いてください）" name="password">

                            </div>
                            <button type="submit"
                                class="block w-full p-4 text-center text-xs text-white font-semibold leading-none bg-blue-600 hover:bg-blue-700 rounded">ログイン</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
