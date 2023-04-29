@extends('template.master')
@section('main')
<div>
    @foreach($articles as $article)
    <div>
        <img src="/images/{{$article->cover}}" alt="" width="200">
        <h2>{{$article->title}}</h2>
        <div>作者:{{$article->user->name}}</div>
        @php
            $tagArray = [];
            foreach($article->tags as $tag){
                $tagArray[] = $tag->title;
            }
            $tagStr = implode(',',$tagArray);
        @endphp
        <div>標籤:{{$tagStr}}</div>
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
