<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDIT POST</h1>
    <form action="/post/{{$post->id}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">標題</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>
