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
  <div class="col-sm-6"><a href="#">
      <h4 class="list-group-item-heading"></h4>
      <a href="{{ route('admin.category.index')}}"  class="btn btn-block btn-default">Создать категорию</a>
      <p class="list-group-item-text"> категория</p>
    </a></div>

  <div class="col-sm-6"><a href="#">
      <h4 class="list-group-item-heading"></h4>
      <a href="#"  class="btn btn-block btn-default">Создать материал</a>
      <p class="list-group-item-text">Материал</p>
    </a></div>
    </div>
</div>

@endsection
