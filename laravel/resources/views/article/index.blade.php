@extends('template.master')
@section('main')
<div>
    <h1>{{Auth::user()->name}}</h1>
    @foreach($articles as $article)
    <div>
        <h2>{{$article->title}}</h2>
        <div>分類:{{$article->category->title}}</div>
        <small>建立時間{{$article->created_at}}</small>
        <div>
            {{$article->content}}
        </div>
        {{-- <a href="{{route('article.show',['article'=>$article->id])}}">繼續閱讀</a> --}}
        <a href="{{route('article.show',$article->id)}}">繼續閱讀</a>
    </div>
    @endforeach
</div>
@endsection
