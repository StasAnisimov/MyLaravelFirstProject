
  <div class="header">
  <div class="logo">
    <img src="img/logo.jpg" alt="">
  </div>
  <div class = "header">
  <nav class="navbar " role="navigation">
  <div class="container">
  <div class="row">
   
    
    

    @if (Route::has('login'))

          <div class="col-lg-9">
                <ul class="navbar navbar-expand-lg navbar- bg-orange" >
                @include('layouts.top_menu',  ['categories'=>$categories])
                
                </ul>
                </div>
            @guest
            <a href="{{ route('login') }}">
              <i class="fas fa-user-circle"></i>
              Вход</a>
              <a href="{{ route('register') }}">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
                Регистрация</a>
            @else
              <div class="col-lg-3">
                <li class="nav-item dropdown" style="    white-space: nowrap;" >
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    
                </li>
                </div>
            @endguest
      </div>
     </div>
    @endif
</div>
</div>

