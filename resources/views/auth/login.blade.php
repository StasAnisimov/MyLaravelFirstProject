@extends('layouts.modules')
  <link rel="stylesheet" href="{{asset('/css/auth.css') }}" >
@section('header')
@section('menu')
@section('content')

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if (session()->has('message'))
                        <div class="alert alert-info">{{ session('message') }}</div>
                    @endif
                <div class="auth_box">
                  <div class="container">
                <img src="{{ asset('/img/muffin.jpg') }}" alt="">
                <h6>Вход</h6>
                <div class="auth_input">
                    <input id="email" type="email" class="auth_input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"placeholder="я" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="auth_input">
                  <input id="password" type="password" class="auth_input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              <div class="remember"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}id="remember">Запомнить меня</div>

              <div class="submit">
                <button type="submit">
                    {{ __('Login') }}
                </button>
              </div>



                  <div class ="forgot">
                    <a href="{{ route('password.request') }}" id="auth_text">Забыли пароль?</a>
                  </div>

                    <div class="auth_social_box">
                      <p>Авторизоваться при помощи</p>
                    <a href="{{url('login/facebook')}}"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="{{url('login/google')}}"><i class="fab fa-google-plus-g"></i></a>
                </div>
                </div>
                </div>
</form>
@endsection
