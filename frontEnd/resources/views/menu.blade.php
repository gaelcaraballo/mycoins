@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <div class="container-fluid mb-4 mt-4">
        <div class="row row-cols-1 row-cols-sm-3 d-flex justify-content-center">
            <a href="{{ route('catalog', ['id' => 'commemorative']) }}"
               class="commemorativeImage m-3 col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark">
                <h5 class="mt-2 fw-bold">
                    @lang('views.commemorative')<br>
                    @auth()
                        {{$collectionCount['commemorative'] ?? '0'}}/{{$countComm}}
                    @endauth
                </h5>
            </a>
            <a href="{{ route('catalog', ['id' => 'circulation']) }}"
               class="circulationBg m-3 col-md-3 col-sm-6 border col-8 border-3 border-dark rounded text-decoration-none text-dark">
                <h5 class="mt-2 fw-bold">
                    @lang('views.circulation')<br>
                    @auth()
                        {{$collectionCount['circulation'] ?? '0'}}/{{$countCirc}}
                    @endauth
                </h5>
            </a>
            <a href="{{route('users')}}"
               class="usersBg bg-white m-3 col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark">
                <h5 class="mt-2 fw-bold">
                    @lang('views.users')
                </h5>
            </a>
            @auth()
                <a href="{{route('statistics')}}"
                   class="statisticsIcon m-3 col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark">
                    <h5 class="mt-2 fw-bold">
                        @lang('views.statistics')
                    </h5>
                </a>
                <a href="{{route('places')}}"
                   class="swapBg m-3 col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark">
                    <h5 class="mt-2 fw-bold">
                        @lang('places.places')
                    </h5>
                </a>
            @endauth
            <a href="/shop"
               class="shopBg bg-white m-3 col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark">
                <h5 class="mt-2 fw-bold">
                    @lang('views.shop')
                </h5>
            </a>
        </div>
        <div class="d-flex justify-content-center social-icons text-center">
            <a href="https://www.instagram.com/mycoins.es"
               class="rounded-circle border border-3 border-dark bg-white d-flex justify-content-center m-1">
                <i class="bi bi-instagram fs-3 text-dark align-self-center"></i>
            </a>

            <a href="https://www.tiktok.com/@mycoins.es"
               class="rounded-circle border border-3 border-dark bg-white d-flex justify-content-center m-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                     class="bi bi-tiktok text-dark align-self-center"
                     viewBox="0 0 16 16">
                    <path
                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                </svg>
            </a>
        </div>
    </div>
@endsection
