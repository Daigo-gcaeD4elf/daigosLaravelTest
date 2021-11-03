<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <title>@yield('title')</title>
    <style>
        .login-state {
            text-align : right;
        }
    </style>
</head>
<body>
    <div class="p-5">
        <p class="login-state">{{ Auth::user()->name }} さん</p>
        <div class="login-state">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <h1 class="text-4xl text-white bg-blue-800 pl-8 py-5 rounded-2xl">EBA ポケモン交換支援ツール</h1>
        <div class="p-3">
            @yield('content')
        </div>
        <p class="text-center mt-6">ダイゴが頑張って作っております</p>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>