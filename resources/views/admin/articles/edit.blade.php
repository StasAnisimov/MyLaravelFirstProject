@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
@component('admin.components.breadcrumb')
@slot('title') Редактирование статьи @endslot
@slot('parent') Главная @endslot
@slot('active') Статьи @endslot
@endcomponent
</hr>
<form class ="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value ="put">
@include ('admin.articles.partials.form')
<input class="btn btn-primary" type="submit">
</form>

</div>




@endsection