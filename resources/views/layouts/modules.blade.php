<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{asset('/css/style.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->

</head>
<body background-image="{{ asset('/img/auth.jpg') }}">
  
@include('layouts.header')
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
        @endsection
        @yield('menu')
        <div class ="content">
            @yield('content')
        </div>
     
</body>
</html>
