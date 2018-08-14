@extends('layouts.modules')
<link rel="stylesheet" href="{{asset('/css/register.css') }}" >
@section('content')
@if (session()->has('message'))
    <div class="alert alert-info">{{ session('message') }}</div>
@endif
<form method="POST" action="{{ route('register') }}">
    @csrf
<div class="auth_box">
  <div class="container">
<img src="{{ asset('/img/register.jpg') }}" alt="">
<h6>Регистрация</h6>
<div class="auth_input">
    <input id="name" placeholder="Введите имя" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    @if ($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="auth_input">
    <input id="email" placeholder="Введите почту" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="auth_input">
    <input id="password" placeholder="Введите пароль" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>
<div class="auth_input">
    <input id="password-confirm" placeholder="Потдвердите пароль" type="password"  name="password_confirmation">
</div>
    <div class="register">
      <button type="submit">
      Регистрация
      </button>
    </div>
    <div class="auth_social_box">
      <p>Зарегистрироваться при помощи:</p>
    <a href="#" ><i class="fab fa-facebook-square"></i></a>
    <a href="#" ><i class="fab fa-twitter"></i></a>
  <a href="#" ><i class="fab fa-google-plus-g"></i></a>
</div>
</div>
</div>
</div>
</form>
  </body>
@endsection
