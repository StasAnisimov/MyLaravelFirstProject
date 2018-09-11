@extends('layouts.modules')
@section('title',$category->title . " - Blog")
@section('content')
<div class="conatiner">
    @forelse($articles as $article)
    <div class="row">
        <div class="col-sm-12">
            <h2><a href="{{route('article' , $article->slug)}}">{{$article->title}}</a></h2>
            <p>{!! $article->description_short !!}</p>
        </div>
    </div>
    @empty
    <h2>Статьи отсутствуют</h2>
    @endforelse
</div>
@endsection