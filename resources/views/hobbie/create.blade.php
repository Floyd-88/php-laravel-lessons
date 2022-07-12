@extends('layouts.main')
@section('content')

<form action="{{route('hobbies.store')}}" method="post">
    @csrf
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="exampleInputPassword1" class="form-label">Новое увлечение</label>
    <input type="text" name="name_hobbie" class="form-control" id="exampleInputPassword1">
    @error('name_hobbie')
      <p class="text-danger">{{ 'Поле увлечение должно быть заполнено' }}</p>
    @enderror
    </div>
    

    <div>
    <br>
    <p>Выберите категорию:</p>
    <select class="form-select" name="category_hobbie_id" aria-label="Default select example">
    @foreach($category as $elem)
    <option 
    {{old('category_hobbie_id') == $elem->id  ? 'selected' : '' }}
    value="{{ $elem->id }}">{{$elem->title}}</option>
    @endforeach
    </select><br>
    </div><br>

    <div>
    <p>Выберите тэги:</p>
    <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
        @foreach($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->title }}</option>
        @endforeach
    </select>
    </div>

  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
<a href="{{ route('hobbies.index') }}">Назад </a>

@endsection