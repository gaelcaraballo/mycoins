@php use Carbon\Carbon; @endphp
@extends('layouts.app')
@section('content')
    <div class="container col-12 col-sm-9 col-md-7 col-lg-7 col-xl-6">
        <h2 class="border-bottom fw-bold">
            {{$detailedUser->nickname}}
        </h2>
        <div class="border d-flex">
            <div class="m-1 col-3 d-flex justify-content-center row">
                <img alt="" class="w-100" src="{{asset('assets/icons/'.$detailedUser->avatar)}}">
                {{--<button class="border rounded" href="">{{__('views.sendPrivMsg')}}</button>--}}
            </div>
            <div class="col-9 m-3">
                <div>
                    {{__('views.localization')}}:
                    <span class="fw-bold">{{$detailedUser->country->country_name}}</span>
                </div>
                <div>
                    {{__('views.collection')}}:
                    <span class="fw-bold text-decoration-none">{{$countCollection}}</span>
                </div>
                <div>
                    {{__('views.createdAt')}}:
                    <span class="fw-bold">{{Carbon::parse($detailedUser->created_at)->format('d M, Y')}}</span>
                </div>
            </div>
        </div>
        <h4 class="border-bottom mt-1">
            {{$detailedUser->nickname. "'s collection"}}
        </h4>
        <div class="border d-flex m-1 bg-dark text-white row">
            @foreach($coins as $coin)
                <div class="border col-3" title="{{$coin->description}}">
                    <div class="d-flex m-1 justify-content-center">
                        <div class="w-25">
                            <img class="w-75 me-auto border border-secondary"
                                 src="{{asset('assets/flags/'.$coin->country->country_image)}}" alt="">
                        </div>
                        <div class="text-center align-items-center bottom">
                            <small>{{$coin->name}}</small>
                        </div>
                    </div>
                    <img src="{{asset('/assets/coins/'.$coin->image)}}" alt=""
                         class="w-75 m-3 img-fluid rounded-circle">
                </div>
            @endforeach
        </div>
    </div>
@endsection

