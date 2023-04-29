<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table,td,th {
            border:1px solid #aaa;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>文章管理</h1>
    <h2>所有文章</h2>
    <table>
        <tr>
            <th>#</th>
            <th>標題</th>
            <th>分類</th>
            <th>建立時間</th>
            <th>更新時間</th>
            <th>動作</th>
        </tr>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->category->title}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->updated_at}}</td>
            <td>
                <form action="{{route('admin.article.destroy',$article->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="刪除">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <h2>已刪除文章</h2>
</body>
</html>
