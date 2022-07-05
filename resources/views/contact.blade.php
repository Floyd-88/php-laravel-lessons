@extends('layouts.main')
@section('content')
<div>
    <h2>{{$contact->name}}</h2>
    <h4>Страна: {{$contact->Country}}</h4>
    <h4>Город: {{$contact->city}}</h4>
    <h4>email: {{$contact->email}}</h4>
    <h4>Телефон: {{$contact->phone}}</h4>
</div>
@endsection