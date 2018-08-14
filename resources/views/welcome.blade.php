<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="public/css/style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Styles -->

    </head>
    <body>
      @section('header')
      </section>
      <div class = "header_box">
      <div class="header">
      <div class="logo">
        <img src="img/logo.jpg" alt="">
      </div>
      <div class = "header">
        @if (Route::has('login'))
<div class = "links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">
                      <i class="fas fa-user-circle"></i>
                      Вход</a>
                      <a href="{{ route('register') }}">
                        <i class="fas fa-user-plus" aria-hidden="true"></i>
                        Регистрация</a>
                @endauth
          </div>
        @endif
    </div>
  </div>
</div>
@show
@section('menu')
<nav class="main_menu">
  <ul>
    <li><a href="{{ url('/') }}">
<i class="fa fa-home" aria-hidden="true"></i>
    Главная
    </a>
  </li>
    <li>
      <a href="{{ url('/buy') }}">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        Купить
      </a>
    </li>
    <li>
      <a href="{{ url('/blog') }}">
        <i class="fa fa-users" aria-hidden="true"></i>
        Блог
    </a>
  </li>
    <li>
      <a href="{{ url('/restaurant') }}">
<i class="fa fa-map-marker" aria-hidden="true"></i>
        Рестораны
      </a>
    </li>
    <li>
      <a href="{{ url('/vacancies') }}">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        Вакансии
      </a>
    </li>
  </ul>
</nav>
@show
    </body>
</html>
