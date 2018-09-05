@extends ('admin.layouts.app_admin')

@section('content')

<div class="container">

@component('admin.components.breadcrumb')
@slot('title')
Список статей
@endslot
@slot('parent')
Главная
@endslot
@slot('active')
Статьи
@endslot


@endcomponent

<a href="{{route('admin.article.create')}}"class="btn btn-primary pull-left" style=""><i class="far fa-plus-square"></i> Создать статью </a>
<hr>
<table class=""table table-striped>
    <thead>
        <th width="300">Наименование</th>
        <th width="300">Публикация</th>
        <th class = "text-right" >Действие</th>
    </thead>
    <tbody>
    
    @forelse ($articles as $article)

  <tr>
      <td>{{$article->title}}</td>
      <td>{{$article->published}}</td>
      <td>
     
<form onsubmit="if(confirm('Удалить?')){return true}else{return false}" action="{{route('admin.article.destroy' , $article)}}" method ="post">

<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}
<a href="{{route('admin.article.edit',  $article )}}"class="btn btn-primary"><i class="fas fa-edit"></i>

</a>
<button type ="submit"class ="btn btn-danger"><i class="far fa-trash-alt"></i></button>
</form>
      </td>
  </tr>
@empty
<tr>
    <td colspan = "3" class ="text-center"><h2>Данные отсутствуют</h2></td>
</tr>
    @endforelse
    </tbody>
</table>
</div>

@endsection