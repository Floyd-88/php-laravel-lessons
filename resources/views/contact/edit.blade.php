@extends('layouts.main')
@section('content')

<form action="{{route('contacts.update', $contact->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3 row">
    <div class="col-sm-4">
      <label for="contact1" class="form-label">Редактировать страну:</label>
      <input type="text" value="{{ $contact->country }}" name="country" class="form-control" id="contact1">
      @error('country')
		<p class="text-danger">{{ 'Вам необходимо указать страну' }} </p>
	    @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="contact2" class="form-label">Редактировать город:</label>
    <input type="text" value="{{ $contact->city }}" name="city" class="form-control" id="contact2">
    @error('city')
		<p class="text-danger">{{ 'Вам необходимо указать город' }} </p>
	  @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="contact3" class="form-label">Редактировать email:</label>
    <input type="text" value="{{ $contact->email }}" name="email" class="form-control" id="contact3">
    @error('email')
		<p class="text-danger">{{ 'Вам необходимо указать email' }} </p>
	  @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="contact4" class="form-label">Редактировать телефон:</label>
    <input type="text" value="{{ $contact->phone }}" name="phone" class="form-control" id="contact4">
    @error('phone')
		<p class="text-danger">{{ 'Вам необходимо указать телефон' }} </p>
	  @enderror
    </div>
  </div>


  </div>
  <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<a href="{{ route('contacts.index') }}">Назад </a>

@endsection