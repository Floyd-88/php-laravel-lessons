@extends('layouts.main')
@section('content')
<h2>Список моих работ</h2>
<ol>
    @foreach($work as $elem)
    <li><a href="{{ route('work.show', $elem->id) }}">{{ $elem->title_work }}</a> <br></li>
    @endforeach
</ol>
   
    <a href="{{ route('work.create') }}">Добавить новую работу</a>
@endsection
