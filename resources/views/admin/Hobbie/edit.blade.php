@extends('layouts.admin')
@section('content')

<form action="{{route('admin.hobbie.update', $hobbieEdit->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <div class="col-sm-4">
    <label for="exampleInputPassword1" class="form-label">Редактировать увлечение:</label>
    <input type="text" value="{{ $hobbieEdit->name_hobbie }}" name="name_hobbie" class="form-control" id="exampleInputPassword1">
    @error('name_hobbie')
      <p class="text-danger">{{ 'Поле увлечение должно быть заполнено' }}</p>
    @enderror


    </div>

    <div>
    <br>
    <p>Изменить категорию:</p>
    <select class="form-select" name="category_hobbie_id" aria-label="Default select example">
    @foreach($category as $elem)
    <option value="{{ $elem->id }}" 

      {{($elem->id === $hobbieEdit->category_hobbie_id) ? 'selected' : ''}}>{{$elem->title}}</option>
    @endforeach
    </select>
    </div><br><br>

    <div>
    <p>Изменить теги:</p>

    <select class="form-select" name="tags[]" multiple aria-label="multiple select example">
        @foreach($tags as $elem)
        <option
        @foreach($hobbieEdit->hobbies as $hobbieTag)
          {{ $elem->id === $hobbieTag->id ? 'selected' : '' }}
        @endforeach
        value="{{ $elem->id }}">{{ $elem->title }}</option>
        @endforeach
    </select>
    </div>

  </div>
  <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<a href="{{ route('admin.hobbie.index') }}">Назад </a>

@endsection