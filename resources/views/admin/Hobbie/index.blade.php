@extends('layouts.admin')
@section('content')
<h2 style="text-align:center">Мои хобби</h2>
@foreach($hobbie as $elem)
<a class="list_hobbie" href="{{ route('admin.hobbie.show', $elem->id) }}">{{$elem->id}}. {{$elem->name_hobbie}}</a> <br>
    <!-- <p class="list_hobbie">{{$elem->id}}. {{$elem->name_hobbie}}</p> -->
@endforeach
<br>
{{$hobbie->withQueryString()->links()}}

@endsection