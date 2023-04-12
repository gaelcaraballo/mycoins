@php  @endphp
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MyCoins') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/login_register.css')}}">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <!--Main Navigation-->
    @if(auth()->check() && Auth::user()->isAdmin)
        <div class="offcanvas offcanvas-start w-25" id="offcanvas" data-bs-backdrop="false">
            <div class="offcanvas-header bg-light shadow-sm">
                <b>Developer Menu</b>
                <a class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></a>
            </div>
            <div class="offcanvas-body">
                <ul class="nav row">
                    <li class="nav-item">
                        <a href="{{'/'}}" class="nav-link text-dark fw-bold">
                            <i class="fs-5 bi-house"></i><span class="ms-1">@lang('titles.home')</span></a>
                    </li>
                    <li>
                        <a href="{{route('places')}}" class="nav-link text-dark fw-bold">
                            <i class="fs-5 bi-shop-window"></i><span class="ms-1">@lang('places.places')</span></a>
                    </li>
                    <li>
                        <a href="{{route('catalog')}}" class="nav-link text-dark fw-bold">
                            <i class="fs-5 bi-coin"></i><span class="ms-1">@lang('coins.coins')</span></a>
                    </li>
                    <li>
                        <a href="{{route('users')}}" class="nav-link text-dark fw-bold">
                            <i class="fs-5 bi-people"></i><span class="ms-1">@lang('views.users')</span></a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
    <!--Main layout-->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container-fluid fw-bold">
            <!-- Left Side Of Navbar -->
            <div class="col d-flex leftMenuAdmin">
                @if(auth()->check() && Auth::user()->isAdmin)
                    <a class="btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
                        <i class="bi bi-list"></i><b class="appName ms-1">{{ config('app.name', 'MyCoins') }}</b>
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <i class="bi bi-house"></i><b class="appName ms-1">{{ config('app.name', 'MyCoins') }}</b>
                    </a>
                @endif
            </div>
            <!-- Center Of Navbar -->
            <div class="justify-content-center">
                <div style="border-bottom: 2px solid darkblue">
                    <b
                        class="text-truncate col-1">{{ucfirst($user->nickname ?? $coin->name ?? $detailedPlace->city_name ?? File::basename(Request::path()))}}</b>
                </div>
            </div>
            <!-- Right Side Of Navbar -->
            <div class="col d-flex rightMenuUser">
                <!-- Authentication Links -->
                @guest
                    <a href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right text-dark"></i></a>
                    @unless(request()->route()->getName() == 'login')
                        <a class="logInIcon my-auto nav-link pe-2"
                           href="{{ route('login') }}">@lang('titles.login')</a>
                    @endunless
                    @unless(request()->route()->getName() == 'register')
                        <a class="registerIcon my-auto nav-link border-start border-2 border-secondary ps-2 pe-2"
                           href="{{ route('register') }}">@lang('titles.register')</a>
                    @endunless
                @else
                    <div class="profileIcon nav-item dropdown">
                        <a class="nav-link d-flex" data-bs-toggle="dropdown" href="">
                            <img alt="" class="rounded-circle me-1" width="30px"
                                 src="{{asset('assets/avatars/'.Auth::user()->avatar)}}">
                            <div class="my-auto dropdown-toggle">{{Auth::user()->nickname}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item border-bottom fw-bold" href="{{route('profile')}}">
                                @lang('profile.profileTitle')</a>
                            <a class="dropdown-item" href="{{route('logout')}}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('titles.logout')
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
                <div class="langIcon nav-item dropdown my-auto border-start border-2 border-secondary ps-2">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <span>{{strtoupper(App::getLocale())}}</span>
                        @if(App::getLocale() == 'en')
                            <img alt="" width="30px" src="{{asset('assets/flags/gb.png')}}">
                        @else
                            <img alt="" width="30px" src="{{asset('assets/flags/'.App::getLocale().'.png')}}">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{url('locale/es')}}">ES
                            <img alt="" class="w-25" src="{{asset('assets/flags/es.png')}}"></a>
                        <a class="dropdown-item" href="{{url('locale/en')}}">EN
                            <img alt="" class="w-25" src="{{asset('assets/flags/gb.png')}}"></a>
                        <a class="dropdown-item" href="{{url('locale/fr')}}">FR
                            <img alt="" class="w-25" src="{{asset('assets/flags/fr.png')}}"></a>
                        <a class="dropdown-item" href="{{url('locale/pt')}}">PT
                            <img alt="" class="w-25" src="{{asset('assets/flags/pt.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
