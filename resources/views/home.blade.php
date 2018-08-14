@extends('layouts.modules')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Hi   {{ Auth::user()->name }}</p>
                    <form class="" action="{{ route('login') }}" method="post">
                      <a href="{{ url('login/facebook') }}"class="b"><i class="fab fa-facebook"></i>Добавить учетную запись</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
