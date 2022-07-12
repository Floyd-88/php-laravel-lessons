@extends('layouts.main')
@section('content')

<form action="{{ route('work.update', $work->id) }}" method="post">
    @csrf
    @method('patch')
    <div>
        <label for="title">Название работы:</label> <br>
        <input id="title" name="title_work" value="{{$work->title_work}}" type="text">
        @error('title_work')
            <p class="text-danger">{{'Название работы должно быть заполнено'}}</p>
        @enderror
    </div> <br>
    <div>
        <label for="descript">Описание работы:</label> <br>
        <textarea name="description_work" id="descript" cols="30" rows="10">{{$work->description_work}}</textarea>
        @error('description_work')
            <p class="text-danger">{{'Название работы должно быть заполнено'}}</p>
        @enderror
    </div><br>
    <div>
        <label for="link">Ссылка:</label><br>
        <input id="link" name="link" type="text" value="{{$work->link}}">
    </div><br>
    <div>
        <label for="grade">Оценка:</label><br>
        <input id="grade" name="grade" type="text" value="{{$work->grade}}"><br>
    </div><br>
        <p>Изменить категорию:</p>
    <select class="form-select" name="language_id" aria-label="Default select example" style="width:auto">
        @foreach($category as $elem)
    <option value="{{ $elem->id }}" {{ ($elem->id == $work->language_id) ? 'selected' : '' }}>{{ 
        $elem->name_language }}</option>
        @endforeach
    </select>

    <select class="form-select" multiple aria-label="multiple select example" name="tags[]">

        @foreach($tags as $elem)
        <option 
        
        @foreach($work->tag_works as $workTag )
            {{ ($elem->id ==  $workTag->id) ? 'selected' : ''}}
        @endforeach
        
        value="{{ $elem->id }}">{{ $elem->title }}</option>
        @endforeach
    </select>

    </div><br>
    
    <input type="submit" value="Отредактировать">
</form>
<a href="{{ route('work.show', $work->id) }}">Назад</a>
@endsection