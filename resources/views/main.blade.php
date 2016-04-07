<html>
<head>
    <title>Ligt het bier al koud punt NL</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="icon" type="image/png" href="https://www.ligthetbieralkoud.nl/beer.png"/>
    @yield('head')
</head>
<body>
<div class="top-bar">
    <ul>
        @if (Auth::check())
            <li class="userinfo">Currently logged in user: {{ Auth::user()->name }}</li>
            @if($coldBool)
                <li class="link">Beer is cold!</li>
            @else
                <li class="link"><a href="{{ route('beer.update') }}">Is the beer cold?</a></li>
            @endif
        @else
            <li class="userinfo">Currently not logged in. <a href="{{ route('auth.login') }}">Login</a></li>
        @endif
    </ul>
</div>
<div class="overlay"></div>
<div class="container">
@yield('content')
</div>
</body>
</html>
