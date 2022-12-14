<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/x-icon"/>
    <title>{{ __('app.title') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo-size"
                     src=@if (app()->getLocale() == "en")  {{ asset('img/VGTU-logo-en.png') }} @else {{ asset('img/VGTU-logo-lt.png') }} @endif>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item {{ (request()->is('content/about')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('content/about') }}">
                            {{ __('app.menu.about') }}
                        </a>
                    </li>

                    <li class="nav-item {{ (request()->is('content/contacts')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('content/contacts') }}">
                            {{ __('app.menu.contacts') }}
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ strtoupper(app()->getLocale()) }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('locale/en') }}">EN</a>
                            <a class="dropdown-item" href="{{ url('locale/lt') }}">LT</a>
                        </div>
                    </li>


                    <!-- Authentication Links -->
                    @guest
                        {{--<li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('app.menu.login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}   ">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif--}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle auth-link-space" href="#"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('app.admin.home.home_dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('course.list') }}">
                                    {{ __('app.admin.create_course.dropdown_title') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('edit.content') }}">
                                    {{ __('app.admin.edit_pages.dropdown_title') }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('app.menu.logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest


                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
