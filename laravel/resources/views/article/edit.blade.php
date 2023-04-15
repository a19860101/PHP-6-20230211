<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDIT article</h1>
    <form action="{{route('article.update',$article->id)}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">標題</label>
            <input type="text" name="title" value="{{$article->title}}">
        </div>
        <div>
            <label for="">分類</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == $article->category_id ? 'selected':'';}}>
                    {{$category->title}}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$article->content}}</textarea>
        </div>
        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>
