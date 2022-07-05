@extends('layouts.main')
@section('content')
    <div>
<img width="100px" src="{{$profile->ava}}" alt="ava">
<h2>{{$profile->name}}</h2>
<h4>Возраст: {{$profile->age}}</h4>
<h4>Город: {{$profile->city}}</h4>
<h4>Работа: {{$profile->profession}}</h4>
<h4>Обо мне: {{$profile->about_me}}</h4>

    </div>

    @endsection