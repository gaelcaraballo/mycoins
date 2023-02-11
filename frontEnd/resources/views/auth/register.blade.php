@extends('layouts.app')
@section('content')
    <?php

    use App\Models\Country;

    ?>
    <style>
        @media (max-width: 576px) {
            h5 {
                display: none !important;
            }

            .card {
                border: none !important;
                background-color: transparent;
            }
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card fw-bold">
                    <h5 class="card-header text-center fw-bold">{{ __('auth.register') }}</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="nickname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.nickname') }}</label>
                                <div class="col-md-6">
                                    <input id="nickname" type="text"
                                           class="form-control @error('nickname') is-invalid @enderror" name="nickname"
                                           value="{{ old('nickname') }}" autocomplete="nickname" autofocus>
                                    @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="example@example.com"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="********"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.confirmPassword') }}</label>
                                <div class="col-md-6">
                                    <input autocomplete="new-password" class="form-control" id="password-confirm"
                                           name="password_confirmation" type="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.country') }}</label>
                                <div class="col-md-6">
                                    <select class="form-select" id="country_id" name="country_id">
                                        <option value="" hidden>--{{__('views.selectCountry')}}--</option>
                                        @foreach(Country::select('id','country_name')->get() as $country)
                                            <option
                                                value="{{$country->id}}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{$country->country_name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary me-2" type="submit">{{ __('auth.register') }}</button>
                                <span class="my-auto">{{__('or')}}</span>
                                <a class="my-auto ms-2 text-decoration-none"
                                   href="{{route('login')}}">{{ __('auth.loginHere') }}</a>
                            </div>
                            <input hidden autocomplete="avatar" class="form-control" id="avatar" name="avatar"
                                   type="text" value="icon.png">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
