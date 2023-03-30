@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header fw-bold cardTitleProfile">@lang('profile.profileTitle')</h5>
                    <div class="card-body">
                        <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div>
                                <img alt="" id="imageSnippet" height="150px" width="150px"
                                     class="rounded-circle @error('avatar') is-invalid @enderror"
                                     src="{{asset('assets/avatars/'.Auth::user()->avatar) }}">
                                @error('avatar')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                <div class="d-flex align-items-center mt-3">
                                    <div class="custom-input-file me-2">
                                        <input id="avatar" name="avatar" class="avatar p-1" type="file">
                                        @lang('profile.changeAvatar')
                                    </div>
                                    <a href="{{ route('delete-avatar') }}"
                                       class="text-decoration-none text-dark fw-bold">@lang('profile.deleteAvatar')</a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="nickname"
                                               class="mt-3 fw-bold">@lang('profile.profileUsername')</label>
                                        <input class="form-control @error('nickname') is-invalid @enderror" type="text"
                                               name="nickname" id="nickname"
                                               value="{{ old('nickname', Auth::user()->nickname) }}">
                                        @error('nickname')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        <label for="email" class="mt-3 fw-bold">@lang('profile.profileEmail')</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                               name="email" id="email"
                                               value="{{Auth::user()->email }}">
                                        @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        <label for="country" class="mt-3 fw-bold">@lang('auth.country')</label>
                                        <select name="profileCountry" id="profileCountry" class="form-select">
                                            <option hidden
                                                    value="{{Auth::user()->country->id}}">{{Auth::user()->country->country_name}}</option>
                                            @foreach($countries as $country)
                                                <option
                                                    value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" class="mt-3 fw-bold">@lang('profile.profileName')</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                                               name="name" type="text"
                                               value="{{ucfirst(Auth::user()->name) }}">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <label for="surname"
                                               class="mt-3 fw-bold">@lang('profile.profileSurname')</label>
                                        <input class="form-control @error('surname') is-invalid @enderror" type="text"
                                               name="surname" id="surname"
                                               value="{{ucfirst(Auth::user()->surname) }}">
                                        @error('surname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="border border-white bg-primary text-white fw-bold p-2"
                                            type="submit">@lang('profile.saveChanges')</button>
                                    <a class="border border-white bg-danger text-white fw-bold p-2 text-decoration-none"
                                       id="deleteButton" href="{{ route('profile.delete', Auth::user()->id) }}"
                                       onclick="return confirm('Are you sure you want to delete your account? This is an irreversible action!')">
                                        @lang('profile.deleteAccount')</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
