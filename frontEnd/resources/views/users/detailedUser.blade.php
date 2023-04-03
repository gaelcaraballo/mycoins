@php use Carbon\Carbon; @endphp
@extends('layouts.app')
@section('content')
    <div class="container col-12 col-sm-9 col-md-7 col-lg-7 col-xl-6 mt-4 mb-4">
        <h2 class="border-bottom fw-bold">{{$detailedUser->nickname}}</h2>
        <div class="border">
            <div class="row row-cols-2">
                <div class="col-4 col-sm-3">
                    <img alt="" class="rounded-circle w-100 m-2"
                         src="{{asset('assets/avatars/'.$detailedUser->avatar)}}">
                </div>
                <div class="col-8 col-sm-9 mt-3 mb-3">
                    <div>
                        @lang('views.localization'):
                        <span class="fw-bold">{{$detailedUser->country->country_name}}</span>
                        <img width="7%" src="{{asset('assets/flags/'.$detailedUser->country->country_image)}}" alt="">
                    </div>
                    <div>
                        @lang('views.collection'):
                        <span class="fw-bold text-decoration-none">{{$countCollection}}</span>
                    </div>
                    <div>
                        @lang('views.memberSince'):
                        <span class="fw-bold">{{Carbon::parse($detailedUser->created_at)->format('d M, Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-1">@lang('views.collection')</h4>
        @if(count($coins) <= 0)
            <div class="alert alert-success" aria-label="Close">@lang('coins.noCoins')</div>
        @else
            <div class="border d-flex bg-dark text-white">
                @foreach($coins as $coin)
                    <div class="border col-3 col-sm-3 p-1" title="{{$coin->description}}">
                        <div class="d-flex m-1 justify-content-center">
                            <div class="w-25">
                                <img class="w-75 me-auto border border-secondary"
                                     src="{{asset('assets/flags/'.$coin->country->country_image)}}" alt="">
                            </div>
                            <div class="text-center align-items-center bottom">
                                <small>{{$coin->name}}</small>
                            </div>
                        </div>
                        <a href="{{route('coins.detailedCoin', ['id'=>$coin->id])}}">
                            <img src="{{asset('/assets/coins/'.$coin->image)}}" alt=""
                                 class="w-75 m-3 img-fluid rounded-circle">
                        </a>
                        <span class="d-flex justify-content-center">{{$coin->userCoinInYears}}</span>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="d-flex justify-content-center mt-1">
            {{$coins->links()}}
        </div>
    </div>
@endsection

