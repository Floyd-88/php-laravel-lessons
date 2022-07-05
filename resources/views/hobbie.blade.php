@extends('layouts.main')
@section('content')
<h2>Мои увлечения:</h2>
@foreach($hobbie as $elem)
<p>-{{$elem->name_hobbie;}};</p>
@endforeach

@endsection

