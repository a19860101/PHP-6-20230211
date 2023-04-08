<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>{{$post->title}}</h1>
        <small>
            {{$post->created_at}}
        </small>
        <div>
            {{$post->content}}
        </div>
        <a href="/post">返回</a>
        <a href="/post/{{$post->id}}/edit">編輯</a>
        <form action="/post/{{$post->id}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        </form>
    </div>
</body>
</html>
