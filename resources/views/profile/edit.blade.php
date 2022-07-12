@extends('layouts.main')
@section('content')

<form action="{{route('profile.update', $profile->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3 row">
    <div class="col-sm-4">
      <label for="profile1" class="form-label">Редактировать имя:</label>
      <input type="text" value="{{ $profile->name }}" name="name" class="form-control" id="profile1">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile2" class="form-label">Редактировать возраст:</label>
    <input type="text" value="{{ $profile->age }}" name="age" class="form-control" id="profile2">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile3" class="form-label">Редактировать город:</label>
    <input type="text" value="{{ $profile->city }}" name="city" class="form-control" id="profile3">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile4" class="form-label">Редактировать работу:</label>
    <input type="text" value="{{ $profile->profession }}" name="profession" class="form-control" id="profile4">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile4" class="form-label">Редактировать информацю о себе:</label>
    <input type="text" value="{{ $profile->about_me }}" name="about_me" class="form-control" id="profile4">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-4">
    <label for="profile4" class="form-label">Редактировать аву:</label>
    <input type="text" value="{{ $profile->ava }}" name="ava" class="form-control" id="profile4">
    </div>
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<a href="{{ route('profile.index') }}">Назад </a>

@endsection