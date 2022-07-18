@extends('layouts.admin')
@section('content')
<h2>Список моих работ</h2>
<ol>
    @foreach($work as $elem)
    <li><a href="{{ route('admin.work.show', $elem->id) }}">{{ $elem->title_work }}</a> <br></li>
    @endforeach
</ol>
   <br>
   {{$work->withQueryString()->links()}}
@endsection