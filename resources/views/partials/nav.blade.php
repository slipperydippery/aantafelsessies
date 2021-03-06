<nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <a class="navbar-brand mr-4 d-flex" href="{{ url('/') }}">
            @if(Request::is('/'))
                    <img src="/img/logo.svg" width="120" height="70" class="align-top mr-1 d-none d-xl-block" alt="Logo">
                    <span class="align-self-center brand-title">Digitale Gesprekshulp</span>
            @else
                    <img src="/img/logo.svg" width="120" height="70" class="align-top mr-1 d-none d-xl-block" alt="Logo">
                    <span class="align-self-center brand-title">Digitale Gesprekshulp</span>
            @endif
        </a>
        
        <button class="navbar-toggler hidden-lg-up pull-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-toggleable-md navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto col">
                <!-- Authentication Links -->
                @guest
                    <li class=""><a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a></li>
                    <li class=""><a class="nav-link" href="{{ route('register') }}">{{ __('Registreer') }}</a></li>
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
                    @if ( Auth::user()->admin )
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('feedback.index') }}">
                                    Feedback
                                </a>
                            </div>
                        </li>
                    @endif
                @endguest

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle mr-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Meer info <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"> Privacyverklaring </a>
                        <a class="dropdown-item" href=" {{ route('cookies') }} "> Cookieverklaring </a>
                        <a class="dropdown-item" href=" {{ route('contact') }} "> Contact </a>
                        <a class="dropdown-item" href="/pdf/Handleiding digitale gesprekshulp.pdf" target="blank"> Handleiding </a>
                        <a class="dropdown-item" href="/pdf/Literatuurlijst digitale gesprekshulp.pdf" target="blank"> Literatuurlijst </a>
                    </div>
                </li>
                @guest
                @else
                    <li class="nav-item"><a class="nav-link nav-link--main mr-4 align-top" href=" {{ route('home') }} ">Dashboard</a></li>
                @endguest
                <li class="nav-item"><a class="nav-link nav-link--main mr-4" href="#" data-toggle="modal" data-target="#instructieModal">Instructie</a></li>

            </ul>
        </div>
    </div>
</nav>