@extends('layouts.app')
@section('content')
    <style>
        @media (max-width: 576px) {
            .searchDiv{
                display: none;
            }
            .coinsDiv {
                width: 100vw !important;
            }

            .coinsDiv h2, .collection {
                display: none;
            }

            .coinsDiv div {
                border: none !important;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="coinsDiv container col-12 col-  sm-12 col-md-9 col-lg-8 col-xl-7">
            <h2>{{__('views.users')}}</h2>
            <div class="searchDiv">
                {!! Form::open(['route' => 'users.selectCountry']) !!}
                {!! Form::select('selectCountry', $countries, request()->input('selectCountry'),['class' => 'form-select', 'onchange' => 'this.form.submit()', 'placeholder' => 'Select a Country'] ) !!}
                {!! Form::close() !!}
            </div>
            <div class="border rounded mt-2 bg-dark">
                @foreach($users as $user)
                    <div class="bg-light border rounded m-2 p-1">
                        <div class="row">
                            <a href="{{ route('users.detailedUser', $user->id) }}" class="text-decoration-none">
                                <div class="image-holder-forSale d-flex align-items-center justify-content-start">
                                    <div class="col-2">
                                        <img alt="" class="flagIcon w-25 h-25 border img-fluid"
                                             src="{{asset('/assets/flags/'.$user->country->country_image)}}">
                                        <img alt="" class="w-50 img-fluid"
                                             src="{{asset('/assets/icons/'.$user->avatar)}}">
                                    </div>
                                    <div>
                                        <h5>{{$user->nickname}}</h5>
                                        <h6 class="text-secondary">{{$user->country->country_name}}</h6>
                                    </div>
                                    <div class="me-5 collection ms-auto">
                                        <span class="text-secondary">Collection</span>
                                        <h5 class="text-center">
                                            <span
                                                class="text-decoration-none">{{$user->coin_count}}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
