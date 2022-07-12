@extends('layouts.main')
@section('content')

<form action="{{ route('work.store') }}" method="post">
    @csrf
    <div>
        <label for="title">Название работы:</label> <br>
        <input id="title" name="title_work" type="text">
        @error('title_work')
            <p class="text-danger">{{'Название работы должно быть заполнено'}}</p>
        @enderror
    </div> <br>
    <div>
        <label for="descript">Описание работы:</label> <br>
        <textarea name="description_work" id="descript" cols="30" rows="10"></textarea>
        @error('description_work')
            <p class="text-danger">{{'Описание работы должно быть заполнено'}}</p>
        @enderror
    </div><br>
    <div>
        <label for="link">Ссылка:</label><br>
        <input id="link" name="link" type="text">
        @error('link')
            <p class="text-danger">{{'Укажите ссылку на работу'}}</p>
        @enderror
    </div><br>
    <div>
        <label for="grade">Оценка:</label><br>
        <input id="grade" name="grade" type="text"><br>
        @error('grade')
            <p class="text-danger">{{'Укажите оценку'}}</p>
        @enderror
    </div><br>
    <p>Указать категорию:</p>
    <select class="form-select" name="language_id" aria-label="Default select example" style="width:auto">
        @foreach($category as $elem)
    <option 
        {{old('language_id') == $elem->id ? 'selected' : ''}}
    value="{{ $elem->id }}">{{ $elem->name_language }}</option>
        @endforeach
    </select>
    </div><br>

    <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
        @foreach($tags as $elem)
  <option value="{{ $elem->id }}">{{ $elem->title }}</option>
        @endforeach
</select>
    
    <input type="submit" value="Добавить работу">
</form>
<a href="{{ route('work.index') }}">Назад к списку работ</a>
@endsection