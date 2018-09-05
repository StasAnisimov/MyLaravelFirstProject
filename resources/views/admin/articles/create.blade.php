@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
@component('admin.components.breadcrumb')
@slot('title') Создание новости @endslot
@slot('parent') Главная @endslot
@slot('active') Категории @endslot
@endcomponent
</hr>
<form class ="form-horizontal" action="{{route('admin.article.store')}}" method="post">
{{csrf_field()}}
@include ('admin.articles.partials.form')
<input class="btn btn-primary" type="submit">
<input type="hidden" name="created_by" value="{{Auth::id()}}">
</form>

</div>




@endsection