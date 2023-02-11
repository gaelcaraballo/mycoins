@php use Illuminate\Support\Facades\Route; @endphp
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MyCoins') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    @media (max-width: 576px) {
        .langIcon span, .profileIcon a div, .loginName div {
            display: none;
            width: 0;
        }

        * {
            margin: 0;
            padding: 0;
        }
    }
</style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container-fluid fw-bold">
            <!-- Left Side Of Navbar -->
            <div class="col d-flex justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MyCoins') }}
                </a>
            </div>
            <!-- Center Of Navbar -->
            <div class="col d-flex justify-content-center">
                <div style="border-bottom: 2px solid darkblue">
                    <span>{{ucfirst($detailedUser->nickname ?? File::basename(Request::path()))}}</span>
                </div>
            </div>
            <!-- Right Side Of Navbar -->
            <div class="col d-flex justify-content-center">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a class="logInIcon my-auto nav-link me-2 pe-2 border-end border-2 border-secondary"
                           href="{{ route('login') }}">{{ __('titles.login') }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="registerIcon my-auto nav-link pe-2 border-end border-2 border-secondary"
                           href="{{ route('register') }}">{{ __('titles.register') }}</a>
                    @endif
                @else
                    <div class="profileIcon nav-item dropdown">
                        <a class="nav-link d-flex" data-bs-toggle="dropdown" href="">
                            <img alt="" id="imageSnip" width="30px"
                                 src="{{ asset('assets/icons/'.auth()->user()->avatar) }}">
                            <div class="my-auto dropdown-toggle">{{ auth()->user()->nickname }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item border-bottom fw-bold" href="/profile">
                                {{ __('profile.profileTitle') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('titles.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
                <div class="langIcon nav-item dropdown ms-2 my-auto">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">
                        <span>{{ strtoupper(App::getLocale())}}</span>
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
    <main class="mt-4 mb-4">
        @yield('content')
    </main>
</div>
</body>
</html>
