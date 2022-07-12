@extends('layouts.main')
@section('content')

<form action="{{ route('news.store') }}" method="post">
    @csrf
    <div class="mb-3">
    <label for="img" class="form-label">Загрузите картинку</label>
    <input type="text" class="form-control" name="img" id="img">
  </div>

<div class="mb-3">
    <label for="exampltext" class="form-label">Введите заголовок</label>
    <input type="text" class="form-control" name="name_news" id="exampltext" value="{{ old('name_news') }}">
    @error('name_news')
      <p class="text-danger">{{ 'Вы должны ввести заголовок' }}</p>
    @enderror
  </div>

<div class="form-floating">
  <textarea class="form-control" name="discription" id="floatingTextarea2" style="height: 100px">{{ old('discription') }}</textarea>
  <label for="floatingTextarea2">Описание новости</label>
  @error('discription')
      <p class="text-danger">{{ 'Вы должны ввести описание новости' }}</p>
    @enderror
</div> <br>

<p>Выберите категорию:</p>
<select class="form-select" aria-label="Default select example" name="category_news_id">
    @foreach($category as $elem)
  <option value="{{ $elem->id }}"
  {{old('category_news_id') == $elem->id ? 'selected' : ''}}
  > {{$elem->title}} </option>
    @endforeach
</select> <br><br>

<p>Выберите теги:</p>
<select class="form-select" multiple aria-label="multiple select example" name="tags[]">
    @foreach($tags as $elem)
     <option value="{{ $elem->id }}">{{ $elem->title }}</option>
    @endforeach
</select>


<input type="submit" value="Добавить новость">
</form>

<a href="{{ route('news.index') }}">Назад</a>

@endsection