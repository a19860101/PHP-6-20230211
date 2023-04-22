@extends('template.master')
@section('page-title')
新增文章
@endsection
@section('main')
<h1>CREATE ARTICLE</h1>
    <form action="{{route('article.store')}}" method="post">
        @csrf
        <div>
            <label for="">標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">分類</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="建立文章">
        <input type="button" value="取消" onclick="history.back()">
    </form>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div>
            {{$error}}
        </div>
        @endforeach
    @endif
@endsection
