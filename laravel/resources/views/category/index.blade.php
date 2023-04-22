@extends('template.master')
@section('page-title')
分類管理
@endsection
@section('main')
<div>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div>
            <label for="">分類標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">slug</label>
            <input type="text" name="slug">
        </div>
        <input type="submit" value="建立標題">
    </form>
</div>
<div>
    {{-- 列表 --}}
    <table>
        <tr>
            <th>#</th>
            <th>標題</th>
            <th>slug</th>
            <th>動作</th>

        </tr>
        @foreach($categories as $category)
        <tr>
            <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf
                @method('put')
                <td>
                    {{$category->id}}
                </td>
                <td>
                    <input type="text" name="title" value="{{$category->title}}">
                </td>
                <td>
                    <input type="text" name="slug" value="{{$category->slug}}">
                </td>
                <td>
                    <input type="submit" value="更新">
                </td>
            </form>
            <form action="{{route('category.destroy',$category->id)}}" method="post">
                @csrf
                @method('delete')
                <td>
                    <input type="submit" value="刪除">
                </td>
            </form>
        </tr>
        @endforeach
    </table>
</div>
@endsection
