<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel @yield('page-title')</title>
    @yield('css')
</head>
<body>
    <nav>
        <div>
            <a href="/article">文章列表</a>
            <a href="/article/create">新增文章</a>
            @auth
            <a href="/category">分類管理</a>
            @endauth
        </div>
        <div>
            @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="logout">
            </form>

            @else

            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif

            @endauth
        </div>
    </nav>
    <div>
        @auth
        會員你好
        @endauth
    </div>
    @yield('main')
</body>
</html>
