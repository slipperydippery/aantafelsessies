<nav class="navbar navbar-expand-md navbar-light border-bottom">
    <div class="container d-flex">
        <a class="navbar-brand mr-4 d-flex" href="{{ url('/') }}">
            @if(Request::is('/'))
                    <img src="/img/logo.svg" width="120" height="70" class="d-inline-block align-top mr-1" alt="Logo">
                    <span class="align-self-center brand-title">Digitale Gesprekshulp</span>
            @else
                    <img src="/img/logo.svg" width="120" height="70" class="d-inline-block align-top mr-1" alt="Logo">
                    <span class="align-self-center brand-title">Digitale Gesprekshulp</span>
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav col">
                @guest
                @else
                	<li><a class="nav-link nav-link--main mr-5 align-top" href=" {{ route('home') }} ">Dashboard</a></li>
                @endguest
            	<li><a class="nav-link nav-link--main mr-5" href="#" data-toggle="modal" data-target="#instructieModal">Instructie</a></li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registreer') }}</a></li>
                @else
                    <li class="nav-item dropdown">
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
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>