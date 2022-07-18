@extends('layouts.admin')
@section('content')

<h2>
    {{ $newsShow->name_news  }}
</h2>
<div>
    <p>{{ $newsShow->discription }}</p>
</div>
<a href="{{ route('admin.news.edit', $newsShow->id) }}">Отредактировать новость</a> <br>
<a href="{{ route('admin.news.index') }}">Назад к новостям</a> <br> <br>
<form action="{{ route('admin.news.destroy', $newsShow->id) }}"  method="post">
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-danger"  value="Удалить новость">
</form>


@endsection