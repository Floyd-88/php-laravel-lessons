@extends('layouts.main')
@section('content')

<form action="{{route('contacts.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
    <div class="col-sm-4">
      <label for="contact1" class="form-label">Указать страну:</label>
      <input type="text"  name="country" class="form-control" id="contact1">
      @error('country')
		<p>{{ 'Вам необходимо указать страну' }} </p>
	    @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="contact2" class="form-label">Указать город:</label>
    <input type="text" name="city" class="form-control" id="contact2">
    @error('city')
		<p>{{ 'Вам необходимо указать город' }} </p>
	  @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="contact3" class="form-label">Указать email:</label>
    <input type="text" name="email" class="form-control" id="contact3">
    @error('email')
		<p>{{ 'Вам необходимо указать email' }} </p>
	  @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="contact4" class="form-label">Указать телефон:</label>
    <input type="text"  name="phone" class="form-control" id="contact4">
    @error('phone')
		<p>{{ 'Вам необходимо указать телефон' }} </p>
	  @enderror
    </div>
  </div>


  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
<a href="{{ route('contacts.index') }}">Назад </a>

@endsection