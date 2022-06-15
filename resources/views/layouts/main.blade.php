<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('title')</title>
</head>
<body>
  <div class="container">
    <div class="row bg-primary">
      <div class="col-8"></div>
      <div class="col-4">
        <ul class="nav">
          @if (!Auth::check())
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('login') }}"> Войти </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('registration') }}"> Зарегистрироваться </a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('logout') }}"> Выйти </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
    @yield('content')
  </div>
</body>
</html>