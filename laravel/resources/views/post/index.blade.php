<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>POST LISTS</h1>
    <a href="/post/create">新增文章</a>

    <div>
        @foreach($data as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <small>建立時間{{$post->created_at}}</small>
            <div>
                {{$post->content}}
            </div>
            <a href="/post/{{$post->id}}">繼續閱讀</a>
        </div>
        @endforeach
    </div>
</body>
</html>
