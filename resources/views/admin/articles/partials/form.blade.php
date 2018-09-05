<label for="">Статус</label>
<select class="form-control" name="published">
@if(isset($article->id))
<option value="0" @if($article->published == 0) selected ="" @endif>Не опубликовано</option>
<option value="1" @if($article->published == 1) selected ="" @endif >Опубликовано</option>
@else
<option value="0">Не опубликовано</option>
<option value="1">Опубликовано</option>
@endif
</select>
<label for="">Наименование</label>
<input type="text" class="form-control" name ="title" placeholder ="Заголовок категории" value ="{{$article->title or "" }}" required>
<label for="">Slug</label>
<input type="text" class ="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$article -> title or "" }}"readonly="">
<label for="">Категория</label> 
<select name="categories[]" class="form-control" multiple="multiple">

@include('admin.articles.partials.categories' , ['categories' => $categories])
</select>
<hr/>
<label for="">Краткое описание статьи</label>
<textarea name="description_short" id="description_short" cols="15" rows="10">{{$article->description_short or ""}}</textarea>
<hr/>
<label for="">Полное описание статьи</label>
<textarea class="form-controll" name="description" id="description" cols="30" rows="10">{{$article->description or ""}}</textarea>
<hr/>
<label for="">Мета заголовок</label>
<input type="text"class="form-control" placeholder="Мета Заголовок" name="meta_title" value="{{$article->meta_title or ""}}" required>
<hr/>
<label for="">Мета описание</label>
<input type="text"class="form-control" placeholder="Мета описание" name="meta_description" value="{{$article->meta_description or ""}}" required>
<hr/>
<label for="">Ключевые слова</label>
<input type="text"class="form-control" placeholder="Ключевые слова" name="meta_keyword" value="{{$article->meta_keyword or ""}}" required>
<hr/>