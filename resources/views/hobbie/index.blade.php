@extends('layouts.main')
@section('content')
<h2 style="text-align:center">Мои хобби</h2>
@foreach($hobbie as $elem)
<a class="list_hobbie" href="{{ route('hobbies.show', $elem->id) }}">{{$elem->id}}. {{$elem->name_hobbie}}</a> <br>
    <!-- <p class="list_hobbie">{{$elem->id}}. {{$elem->name_hobbie}}</p> -->
@endforeach
<br>
{{$hobbie->withQueryString()->links()}}

<a href="{{ route('hobbies.create') }}">Добавить увлечение </a>

@endsection