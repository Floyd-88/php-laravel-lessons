@extends('layouts.admin')
@section('content')

<div>
<p class="list_hobbie">{{$hobbieShow->name_hobbie}}</p>
</div>
<a href="{{route('admin.hobbie.edit', $hobbieShow->id)}}"> Изменить </a> <br>
<a href="{{ route('admin.hobbie.index') }}">Назад</a>

<form action="{{ route('admin.hobbie.destroy', $hobbieShow->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-danger" value="Удалить">
</form>
@endsection