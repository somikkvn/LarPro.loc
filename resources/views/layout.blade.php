<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}"></a>
            @else
                <a href="{{ route('login') }}"></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"></a>
                @endif
            @endauth
        </div>
    @endif
    <div>
        <ul>
            <li><a href="\task">Task</a></li>
            <li><a href="\login">Login</a></li>
            <li><a href="\register">Register</a></li>
            <li><a href="\guestbook">Guestbook</a></li>
            <li><a href="\logout">Logout</a></li>
        </ul>
    </div>

    <div class="container" id="app">

        <br><br><br><br>
        <hr width="100%" color="white">
        <br>
        @yield('main_content')
    </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
{{--        <script src="{{asset('js/axios_test.js')}}"></script>--}}
</body>
</html>
