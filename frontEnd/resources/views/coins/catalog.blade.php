@php use App\Models\Collection; use App\Models\Coin;@endphp
@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/coins.css')}}">
    <div class="container-fluid mt-4 mb-4">
        <div class="d-flex">
            <div class="searchDiv col-2 ms-5 me-5 border rounded">
                <h5 class="mt-2 d-flex justify-content-center fw-bold">@lang('views.filter')</h5>
                <div class="align-content-between m-1">
                    {!! Form::open(['route' => 'coins.selectCoin']) !!}
                    {!! Form::select('countrySelect', $countrySelect, request()->input('countrySelect'), ['class' => 'form-select mb-1', 'onchange' => 'form.submit()','placeholder' => __('views.allCountries')]) !!}
                    {!! Form::select('typeSelect', Coin::groupBy('type')->pluck('type', 'type'), $selectedType ?? request()->input('typeSelect'), ['class' => 'form-select mb-1', 'onchange' => 'form.submit()', 'placeholder' => __('views.allTypes')]) !!}
                    {!! Form::select('yearSelect', $yearSelect, request()->input('yearSelect'), ['class' => 'form-select mb-1', 'onchange' => 'form.submit()','placeholder' => __('views.allYears')]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div
                class="d-flex row justify-content-center text-center coinsDiv bg-dark text-white col-12 col-sm-8 border rounded">
                @if(count($coins) <= 0)
                    <h1 class="mt-2">@lang('coins.noCoins')</h1>
                @else
                    @foreach($coins as $coin)
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 border rounded m-3"
                             id="coinBg-{{$coin->id}}">
                            <div class="d-flex mt-2">
                                <img class="w-25 h-100 me-auto border border-secondary"
                                     src="{{asset('assets/flags/'.$coin->country->country_image)}}"
                                     alt="{{$coin->country_name}}">
                                @auth()
                                    <a href="{{route('addToMyCollection', ['coin' => $coin, 'year' => $coin->year[0]])}}"
                                       @if(sizeof($coin->year) >1) data-bs-target="#flush-collapseOne{{$coin->id}}"
                                       data-bs-toggle="collapse" @endif>
                                        @if(Collection::where('coin_id', $coin->id)->where('year', $coin->year[0])->where('user_id',auth()->id())->count() !==0)
                                            <script>
                                                document.getElementById("coinBg-{{$coin->id}}").style.backgroundColor = 'gray';
                                            </script>
                                            <i class="text-warning bi bi-star-fill"></i>
                                        @else
                                            <i class="text-white bi bi-star"></i>
                                        @endif
                                    </a>
                                @endauth
                            </div>
                            <div class="d-flex justify-content-center row">
                                <a href="{{route('coins.detailedCoin', ['coin'=>$coin])}}"
                                   class="text-decoration-none text-white">
                                    <small class="coinName">{{$coin->name}}</small>
                                    <img src="{{asset('/assets/coins/'.$coin->image)}}" alt="{{$coin->name}}"
                                         class="w-75 m-2 img-fluid rounded-circle align-items-end">
                                    @if(sizeof($coin->year) <2)
                                        <div>
                                            <small>{{$coin->year[0]}}</small>
                                        </div>
                                    @endif
                                </a>
                            </div>
                            @auth
                                <div id="flush-collapseOne{{$coin->id}}" class="accordion-collapse collapse">
                                    <div>
                                        @foreach($coin->year as $year)
                                            <div class="d-flex mb-1">
                                                <small class="mt-1">{{$year}}</small>
                                                <a href="{{route('addToMyCollection', ['coin' => $coin, 'year' => $year])}}"
                                                   class="ms-auto">
                                                    @if(Collection::where('coin_id', $coin->id)->where('year', $year)->where('user_id',auth()->id())->count() !==0)
                                                        <i class="text-warning bi bi-star-fill"></i>
                                                    @else
                                                        <i class="text-white bi bi-star"></i>
                                                    @endif
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endauth
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-2">
                            {{$coins->links()}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
