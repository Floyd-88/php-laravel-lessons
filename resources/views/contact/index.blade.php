@extends('layouts.main')
@section('content')
<h2 style="text-align:center">Контакты</h2>
<div>
 
    <p><b>Старна:</b> {{$contact->country}}</p>
    <p><b>Город:</b> {{$contact->city}}</p>
    <p><b>email:</b> {{$contact->email}}</p>
    <p><b>Телефон:</b> {{$contact->phone}}</p>

    <a href="{{ route('contacts.edit', $contact->id) }}">Отредактировать </a>
 
</div>


@endsection