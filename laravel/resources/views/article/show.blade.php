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
        <h1>{{$article->title}}</h1>
        <small>
            {{$article->created_at}}
        </small>
        <div>
            {{$article->content}}
        </div>
        <a href="/article">返回</a>
        <a href="{{route('article.edit',$article->id)}}">編輯</a>
        <form action="{{route('article.destroy',$article->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        </form>
    </div>
</body>
</html>
