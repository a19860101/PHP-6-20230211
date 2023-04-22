<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel @yield('page-title')</title>
</head>
<body>
    <nav>
        <a href="/article">文章列表</a>
        <a href="/article/create">新增文章</a>
        <a href="/category">分類管理</a>
    </nav>
    @yield('main')
</body>
</html>
