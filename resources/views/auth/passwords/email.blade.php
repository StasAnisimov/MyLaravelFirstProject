@extends('layouts.modules')
  <link rel="stylesheet" href="{{asset('/css/reset.css') }}" >
@section('content')
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="auth_box col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <p id="email_text">Введите E-mail
                            </p>
                            <p>Мы отправим вам сообщение об восстановлении пароля</p>
                                <div class="auth_input">

                                <input id="email" type="email" placeholder="Введите E-mail" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                              </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <div class ="reset_button">
                                <button type="submit">
                                    Восстановить пароль
                                </button>
                              </div>
                    </form>
                      </div>
@endsection
