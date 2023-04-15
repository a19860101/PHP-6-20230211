<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        {{-- <a href="/article/create">新增文章</a> --}}
        <a href="{{route('article.create')}}">新增文章</a>
    </nav>
    <div>
        @foreach($articles as $article)
        <div>
            <h2>{{$article->title}}</h2>
            <small>建立時間{{$article->created_at}}</small>
            <div>
                {{$article->content}}
            </div>
            {{-- <a href="{{route('article.show',['article'=>$article->id])}}">繼續閱讀</a> --}}
            <a href="{{route('article.show',$article->id)}}">繼續閱讀</a>
        </div>
        @endforeach
    </div>
</body>
</html>
