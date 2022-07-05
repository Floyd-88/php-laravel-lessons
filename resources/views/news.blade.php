@extends('layouts.main')
@section('content')

    <h2>Новости</h2>
    @foreach($news as $elem)
      <p><b>{{$elem->name_news}}</b></p>
      <p>{{$elem->discription}}</p>
      <br>
    @endforeach

@endsection