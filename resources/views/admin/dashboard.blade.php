@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">1 надпись</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">2 надпись</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">3 надпись</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">4 надпись</span></p>
      </div>
    </div>
  </div>
</div>
<div class = "container">
<div class="row">
  <div class="col-sm-6">
      
      <a href="{{ route('admin.category.index')}}"  class="btn btn-block btn-default">Создать категорию</a>
      @foreach($categories as $category)
      <a href="{{route('admin.category.edit', $category)}}" class="list-group-item">
      <h4 class="list-group-item-heading">{{$category->title}}</h4>
      <p class="list-group-item-text">{{$category->articles()->count()}}</p>
    </a>
@endforeach
    </div>

  <div class="col-sm-6">
      
      <a href="#"  class="btn btn-block btn-default">Создать материал</a>
      @foreach($articles as $article)
      <a href="{{route('admin.article.edit' , $article)}}" class="list-group-item">
      <h4 class="list-group-item-heading">{{$article->title}}</h4>
      <p class="list-group-item-text">{{$article->categories()->pluck('title')->implode(' ')}}</p>
    </a>
    @endforeach
    </div>
    </div>
</div>

@endsection
