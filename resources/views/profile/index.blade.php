@extends('layouts.main')
@section('content')
<div>
    <?php if(!empty($profile->ava)) { ?>
    <img width="100px" src="{{$profile->ava}}" alt="ava">
    <?php } ?>
    
    <h2>{{$profile->name}}</h2>
    <h4>Возраст: {{$profile->age}}</h4>
    <h4>Город: {{$profile->city}}</h4>
    <h4>Работа: {{$profile->profession}}</h4>
    <h4>Обо мне: {{$profile->about_me}}</h4>

    <a href="{{ route('profile.edit', $profile->id) }}">Отредактировать </a>

</div>
<a href="{{ route('profile.create') }}">Добавить пользователя</a>

@endsection