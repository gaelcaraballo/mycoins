@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-4 mb-4">
        <div class="placesDiv container col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
            <form action="{{ route('places.update', ['id' => $detailedPlace->id]) }}" method="POST">
                <div class="d-flex justify-content-between mt-1 border-bottom">
                    <h2>@lang('places.places')</h2>
                    @if(Auth::user()->isAdmin)
                        <button type="submit" class="btn btn-primary mb-1">@lang('places.savePlace')</button>
                    @endif
                </div>
                <div class="mt-1">
                    @csrf
                    <div class="mb-2">
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="city_name" class="mt-3 fw-bold">@lang('views.cityName')</label>
                            </div>
                            <div class="col">
                                <label for="postcode" class="mt-3 fw-bold">@lang('views.postcode')</label>
                            </div>
                            <div class="col">
                                <input class="form-control @error('city_name') is-invalid @enderror" type="text"
                                       name="city_name" id="city_name" value="{{$detailedPlace->city_name}}"
                                       @if(!Auth::user()->isAdmin)readonly @endif>
                                @error('city_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror</div>
                            <div class="col">
                                <input class="form-control @error('postcode') is-invalid @enderror" type="number"
                                       name="postcode" id="postcode" value="{{$detailedPlace->postcode}}"
                                       @if(!Auth::user()->isAdmin)readonly @endif>
                                @error('postcode')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="street_name" class="mt-3 fw-bold">@lang('views.streetName')</label>
                            </div>
                            <div class="col">
                                <label for="country_id" class="mt-3 fw-bold">@lang('auth.country')</label>
                            </div>
                            <div class="col">
                                <input class="form-control @error('street_name') is-invalid @enderror" type="text"
                                       name="street_name" id="street_name" value="{{$detailedPlace->street_name}}"
                                       @if(!Auth::user()->isAdmin) readonly @endif>
                                @error('street_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <input type="text" name="country_id" class="form-control" id="country_id">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="map" class="d-flex justify-content-center border border-2 border-dark-subtle"
                         style="height: 300px;"></div>
                    @if(session('success'))
                        <div class="alert alert-success">@lang('places.placeWarning')</div>
                    @endif
                    <input type="hidden" name="latitude" id="latitude" value="{{$detailedPlace->latitude}}">
                    <input type="hidden" name="longitude" id="longitude" value="{{$detailedPlace->longitude}}">
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/places/mapPlaces.js') }}"></script>
@endsection
