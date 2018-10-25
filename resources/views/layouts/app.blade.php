<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img style="height:40px; width:auto" src="{{ asset('images/ppm_matrimony.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/profile">Search</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/profile/create">Add record</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            @if(Auth::user()->type == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Admin Panel</a>
                            </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('layouts.message')
            @yield('content')
        </main>
    </div>
    <div style="margin:140px" class="clearfix"></div>    
    <footer class="section footer-classic context-dark bg-image navbar-fixed-bottom" style="background: #044992; padding-top:15px; box-shadow: 1px 4px 10px rgba(0, 0, 0, 0.25);">
            <div class="container-fluid">
              <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                  <div class="pr-xl-4">
                    <p>திருமங்கை ஆல்வார் திருமண தகவல் மையம் திருச்சியை தலைமையிடமாக கொண்டு துவக்கப்பட்டுள்ளது.</p>
                    <!-- Rights-->
                    <p class="rights"><span>©  </span><span class="copyright-year">2018</span> <span>All Rights Reserved.</span></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <h5>தொடர்புக்கு</h5>
                  <dl class="contact-list">
                    <dt>முகவரி:</dt>
                    <dd>50/1-A, K.P.N. பில்டிங், மேலசிந்தாமணி, அண்ணாசிலை அருகில், திருச்சி – 2.
                            தமிழ் நாடு.</dd>
                  </dl>
                  <dl class="contact-list">
                    <dt>email:</dt>
                    <dd><a href="mailto:#">murugesan311259@gmail.com</a></dd>
                  </dl>
                  <dl class="contact-list">
                    <dt>phones:</dt>
                    <dd><a href="tel:#">+91 7568543012</a> <span>or</span> <a href="tel:#">+91 98437 57373</a>
                    </dd>
                  </dl>
                </div>
                <div class="col-md-4 col-xl-3">
                  <h5>Links</h5>
                  <ul class="nav-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Pricing</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
</body>
</html>
