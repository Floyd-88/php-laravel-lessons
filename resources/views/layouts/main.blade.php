<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Мой сайт</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('profile.showProfile')}}">Мой профиль</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('hobbie.showHobbie')}}">Мои хобби</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('work.showWork')}}">Мои работы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('news.showNews')}}">Мои новости</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts.showContacts')}}">Мои контакты</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
</header>

    @yield('content')
</body>
</html>
