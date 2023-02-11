@extends('layouts.app')
@section('content')
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
                    <h5 class="card-header text-center fw-bold">{{ __('auth.login') }}</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.email') }}</label>
                                <div class="col-md-6">
                                    <input autocomplete="email" autofocus
                                           class="form-control @error('email') is-invalid @enderror" id="email"
                                           name="email" required type="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('auth.password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="justify-content-center offset-md-1 row">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-decoration-none disabled"
                                       href="{{ route('password.request') }}">{{ __('auth.forgot') }}</a>
                                @endif
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary me-2" type="submit">{{ __('auth.login') }}</button>
                                    <span class="my-auto">{{__('or')}}</span>
                                    <a class="my-auto m-2 text-decoration-none"
                                       href="{{route('register')}}">{{ __('auth.registerHere') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
