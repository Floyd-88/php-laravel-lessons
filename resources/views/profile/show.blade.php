@extends('layouts.main')
@section('content')

<div>
<p class="list_hobbie">{{$hobbie->name_hobbie}}</p>
</div>
<a href="{{route('hobbies.edit', $hobbie->id)}}"> Изменить </a> <br>
<a href="{{ route('hobbies.index') }}">Назад</a>

<form action="{{ route('hobbies.destroy', $hobbie->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-danger" value="Удалить">
</form>
@endsection