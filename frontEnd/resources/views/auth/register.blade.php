<?php use App\Models\Country; ?>
@extends('layouts.app')
@section('content')
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card fw-bold">
                    <h5 class="card-header text-center fw-bold cardTitleEnter">@lang('auth.register')</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="nickname"
                                       class="col-md-4 col-form-label text-md-end">@lang('auth.nickname')</label>
                                <div class="col-md-6">
                                    <input required id="nickname" type="text"
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
                                       class="col-md-4 col-form-label text-md-end">@lang('auth.email')</label>
                                <div class="col-md-6">
                                    <input required id="email" type="email" placeholder="example@example.com"
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
                                       class="col-md-4 col-form-label text-md-end">@lang('auth.password')</label>
                                <div class="col-md-6">
                                    <input required id="password" type="password" placeholder="********"
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
                                       class="col-md-4 col-form-label text-md-end">@lang('auth.confirmPassword')</label>
                                <div class="col-md-6">
                                    <input required autocomplete="new-password" class="form-control"
                                           id="password-confirm"
                                           name="password_confirmation" type="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country"
                                       class="col-md-4 col-form-label text-md-end">@lang('auth.country')</label>
                                <div class="col-md-6">
                                    <select class="form-select @error('country_id') is-invalid @enderror"
                                            id="country_id" name="country_id" required>
                                        <option value="" hidden>--@lang('views.selectCountry')--</option>
                                        @foreach(Country::select('id','country_name')->get() as $country)
                                            <option
                                                value="{{$country->id}}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary me-2" type="submit">@lang('auth.register')</button>
                                <span class="my-auto">@lang('or')</span>
                                <a class="my-auto ms-2 text-decoration-none"
                                   href="{{route('login')}}">@lang('auth.loginHere')</a>
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
