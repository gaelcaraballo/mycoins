@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/places.css')}}">
    <div class="container-fluid mb-4 mt-4">
        <div class="placesDiv container col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
            <div class="d-flex justify-content-between mb-1">
                <h2>@lang('places.places')</h2>
                <a type="text" href="{{route('places.addPlace')}}"
                   class="ms-auto btn btn-success">@lang('places.addPlace')</a>
            </div>
            <div class="d-flex">
                {!!Form::open(['route' => 'places.searchPlace', 'method' => 'get', 'class'=> 'd-flex'])!!}
                {!!Form::text('searchPlace', null, ['placeholder' => __('views.search'), 'class' => 'form-control', 'id'=>'search-input'])!!}
                {!!Form::submit(__('views.search'), ['class' => 'btn btn-primary ms-2 ', 'id'=>'search-btn'])!!}
                @isset($query)
                    {!!Form::button(($query.'<i class="bi bi-x"></i>'), ['class' => 'ms-1 btn border d-flex', 'onclick'=> "document.getElementById('search-btn').click()"])!!}
                @endisset
                {!!Form::close()!!}
            </div>
            @if(empty($places))
                <div id="search-results" class="rounded mt-1 text-danger row">
                    <b>@lang('places.noPlaceFound')</b>
                    <img src="{{asset('assets/otherImages/ruinsNoCoinFound.png')}}" alt="">
                </div>
            @else
                <div class="border rounded mt-1">
                    @foreach($places as $place)
                        <div class="bg-light border rounded m-2 p-1 @if(!$place->isAccepted) bg-danger-subtle @endif">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('places.detailedPlace', $place->id) }}"
                                   class="text-dark text-decoration-none">
                                    <div class="d-flex align-items-center">
                                        <img title="{{$place->country->country_name}}" class="flagIcon border img-fluid"
                                             style="width: 50px; height: 30px;"
                                             src="{{asset('/assets/flags/'.$place->country->country_image)}}" alt="">
                                        <div class="ms-2">
                                            <b>{{$place->city_name}}</b>
                                            ({{$place->postcode}})
                                            <br>
                                            <small>{{$place->street_name}}</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="placeButtons ms-auto me-1 d-flex">
                                    @if(Auth::user()->isAdmin)
                                        <form method="POST" action="{{ route('places.toggle', $place->id) }}"
                                              class="d-flex">
                                            @csrf
                                            <button type="submit"
                                                    class="m-1 btn @if($place->isAccepted) btn-success @else btn-warning @endif">
                                                <i class="bi @if($place->isAccepted) bi-check-circle @else bi-clock @endif mb-auto mt-auto"></i>
                                            </button>
                                        </form>
                                        <a class="m-1 btn btn-danger" id="deleteButton"
                                           href="{{ route('places.delete', $place->id) }}"
                                           onclick="return confirm('Are you sure you want to delete this place?')">
                                            <i class="bi bi-x-circle mb-auto mt-auto"></i>
                                        </a>
                                    @else
                                        <button
                                            class="ms-auto btn @if($place->isAccepted) btn-success @else btn-warning @endif">
                                            <i class="bi @if($place->isAccepted) bi-check-circle @else bi-clock @endif mb-auto mt-auto"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{$places->links()}}
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script src="{{ asset('js/places/places.js') }}"></script>
@endsection
