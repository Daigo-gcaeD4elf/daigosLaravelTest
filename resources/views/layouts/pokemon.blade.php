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
    <h1 class="text-green-400 bg-yellow-300">EBA ポケモン交換支援ツール</h1>
    @yield('content')
    <p style="text-align: center;">ダイゴが頑張って作っております</p>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>