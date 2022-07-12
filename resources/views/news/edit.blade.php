@extends('layouts.main')
@section('content')

<form action="{{ route('news.update', $news->id) }}" method="post">
    @csrf
    @method('patch')

    <div class="mb-3">
    <label for="img" class="form-label">Загрузите картинку</label>
    <input type="text" class="form-control" name="img" id="img" value="{{ $news->img }}">

  </div>

    <div class="mb-3">
    <label for="exampltext" class="form-label">Отредактировать заголовок</label>
    <input type="text" class="form-control" value="{{ $news->name_news }}" name="name_news" id="exampltext">
  </div>
<div class="form-floating">
  <textarea class="form-control" name="discription" id="floatingTextarea2" style="height: 100px">{{ $news->discription }}</textarea>
  <label for="floatingTextarea2">Отредактировать описание</label>
</div> <br>

<p>Выберите категорию:</p>
<select class="form-select" aria-label="Default select example" name="category_news_id">
    @foreach($category as $elem)
  <option value="{{ $elem->id }}"  
  {{($elem->id == $news->id) ? 'selected' : ''}}
  > {{$elem->title}} </option>
    @endforeach
</select> <br> <br>

<p>Выберите теги:</p>
<select class="form-select" multiple aria-label="multiple select example" name="tags[]">
    @foreach($tags as $elem)
     <option
     
     @foreach($news->tag_news as $tagNews)
      {{($elem->id == $tagNews->id) ? 'selected' : ''}}
     @endforeach
     
     value="{{ $elem->id }}">{{ $elem->title }}</option>
    @endforeach

<input type="submit" value="Отредактировать новость">

</select>
</form>
<a href="{{ route('news.show', $news->id) }}">Назад</a>

@endsection