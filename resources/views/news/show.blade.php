@extends('layouts.main')
@section('content')

<h2>
    {{ $news->name_news  }}
</h2>
<div>
    <p>{{ $news->discription }}</p>
</div>
<a href="{{ route('news.edit', $news->id) }}">Отредактировать новость</a> <br>
<a href="{{ route('news.index') }}">Назад к новостям</a> <br> <br>
<form action="{{ route('news.destroy', $news->id) }}"  method="post">
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-danger"  value="Удалить новость">
</form>


@endsection