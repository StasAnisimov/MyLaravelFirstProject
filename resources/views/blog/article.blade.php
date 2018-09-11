@extends('layouts.modules')

@section('title' , $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description',$article->meta_description)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12"></div>
        <h1>{{$article->title}}</h1>
    </div>
    <div class="col-sm-12">
    <p>{!! $article->description !!}</p>
    </div>
</div>
@endsection