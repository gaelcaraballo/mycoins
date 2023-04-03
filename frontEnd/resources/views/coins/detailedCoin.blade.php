@php use App\Models\Collection;use Carbon\Carbon;@endphp
@extends('layouts.app')
@section('content')
    <div class="container col-12 col-sm-9 col-md-7 col-lg-7 col-xl-6 mt-4 mb-4">
        <h2 class="border-bottom fw-bold">{{$detailedCoin->name}}</h2>
        <div class="border">
            <div class="row row-cols-2">
                <div class="col-4 col-sm-3">
                    <img alt="" class="rounded-circle w-100 m-2" src="{{asset('/assets/coins/'.$detailedCoin->image)}}">
                    <div class="m-2 text-center d-flex flex-wrap">
                        @foreach($detailedCoin->year as $year)
                            @if(Collection::where('coin_id', $detailedCoin->id)->where('year', $year)->where('user_id',auth()->id())->count() !==0)
                                <b class="text-white bg-success p-1">{{ $year }}</b>
                            @else
                                <b class="m-1">{{$year}}</b>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-8 col-sm-9">
                    <div class="mt-3 mb-3 me-1">
                        <div>
                            @lang('auth.country'):
                            <b>{{$detailedCoin->country->country_name}}</b>
                            <img width="30px" class="me-auto"
                                 src="{{asset('assets/flags/'.$detailedCoin->country->country_image)}}"
                                 alt="{{$detailedCoin->country->country_name}}">
                        </div>
                        <div>
                            @lang('views.type'):
                            <b>{{ucfirst($detailedCoin->type)}}</b>
                        </div>
                        <div>
                            @lang('views.description'):
                            <b class="text-break">{{$detailedCoin->description}}</b>
                        </div>
                        @if(auth()->user()->isAdmin)
                            <div>
                                @lang('views.createdAt'):
                                <i>{{Carbon::parse($detailedCoin->created_at)->format('d M, Y')}}</i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

