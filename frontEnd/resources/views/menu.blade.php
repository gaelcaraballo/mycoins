@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <div class="container-fluid mb-4 mt-4">
        <div class="row row-cols-1 row-cols-sm-3 d-flex justify-content-center linkMenuDiv">
            <a href="{{ route('catalog', ['coin' => 'commemorative']) }}"
               class="col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark commemorativeImage m-3">
                <h5 class="mt-2 fw-bold">@lang('views.commemorative')<br>@auth()
                        {{$collectionCount['commemorative'] ?? '0'}}/{{$countComm}}
                    @endauth</h5>
            </a>
            <a href="{{ route('catalog', ['coin' => 'circulation']) }}"
               class="col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark circulationBg m-3">
                <h5 class="mt-2 fw-bold">@lang('views.circulation')<br>@auth()
                        {{$collectionCount['circulation'] ?? '0'}}/{{$countCirc}}
                    @endauth</h5>
            </a>
            <a href="{{route('users')}}"
               class="col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark bg-white m-3 usersBg">
                <h5 class="mt-2 fw-bold">@lang('views.users')</h5>
            </a>
            @auth()
                <a href="{{route('statistics')}}"
                   class="col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark statisticsIcon m-3">
                    <h5 class="mt-2 fw-bold">@lang('views.statistics')</h5>
                </a>
                <a href="{{route('places')}}"
                   class="col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark swapBg m-3">
                    <h5 class="mt-2 fw-bold">@lang('places.places')</h5>
                </a>
            @endauth
            <a href="/shop"
               class="col-md-3 col-sm-6 col-8 border border-3 border-dark rounded text-decoration-none text-dark bg-white m-3 shopBg">
                <h5 class="mt-2 fw-bold">@lang('views.shop')</h5>
            </a>
        </div>
        <div class="d-flex justify-content-center social-icons text-center">
            <a href="https://www.instagram.com/mycoins.es"
               class="m-1 rounded-circle border border-3 border-dark bg-white d-flex justify-content-center">
                <i class="bi bi-instagram fs-3 text-dark align-self-center"></i>
            </a>
            <a href="https://www.tiktok.com/@mycoins.es"
               class="m-1 rounded-circle border border-3 border-dark bg-white d-flex justify-content-center">
                <i class="bi bi-tiktok fs-3 text-dark align-self-center"></i>
            </a>
        </div>
    </div>
@endsection
