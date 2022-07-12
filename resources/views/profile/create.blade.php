@extends('layouts.main')
@section('content')
<h2>Создайте профиль</h2>
<form action="{{route('profile.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
    <div class="col-sm-4">
      <label for="profile1" class="form-label">Укажите имя:</label>
      <input type="text" name="name" class="form-control" id="profile1">
      @error('name')
       <p class="text-danger">{{ 'Вы должны указать имя' }}</p> 
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile2" class="form-label">Укажите возраст:</label>
    <input type="text"  name="age" class="form-control" id="profile2">
      @error('age')
       <p class="text-danger">{{ 'Вы должны указать возраст' }}</p> 
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile3" class="form-label">Укажите город:</label>
    <input type="text"name="city" class="form-control" id="profile3">
    @error('city')
       <p class="text-danger">{{ 'Вы должны указать город' }}</p> 
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile4" class="form-label">Укажите работу:</label>
    <input type="text"  name="profession" class="form-control" id="profile4">
    @error('profession')
       <p class="text-danger">{{ 'Вы должны указать работу' }}</p> 
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile4" class="form-label">Укажите информацю о себе:</label>
    <input type="text"  name="about_me" class="form-control" id="profile4">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile4" class="form-label">Укажите аву:</label>
    <input type="text" name="ava" class="form-control" id="profile4">
    </div>
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Создать пользователя</button>
</form>
<a href="{{ route('profile.index') }}">Назад </a>

@endsection