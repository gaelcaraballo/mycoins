@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
    <div class="container-fluid mt-4 mb-4">
        <div class="usersDiv container col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
            <h2>@lang('views.users')</h2>
            {!! Form::open(['route' => 'users.selectCountry']) !!}
            {!! Form::select('selectCountry', $countries, request()->input('selectCountry'),['class' => 'form-select', 'onchange' => 'this.form.submit()', 'placeholder' => 'Select a Country'] ) !!}
            {!! Form::close() !!}
            <div class="border rounded mt-2 bg-dark">
                @foreach($users as $user)
                    <div class="bg-light border rounded m-2 p-1">
                        <a href="{{ route('users.detailedUser', $user->id) }}" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="d-flex align-items-center">
                                    <img width="50px" class="img-fluid rounded-circle"
                                         src="{{asset('/assets/avatars/'.$user->avatar)}}" alt="">
                                    <div class="m-1 text-dark">
                                        <h5 class="mb-auto">{{$user->nickname}}</h5>
                                        <div class="d-flex">
                                            <img alt="" class="flagIcon border img-fluid" width="30px"
                                                 src="{{asset('/assets/flags/'.$user->country->country_image)}}">
                                            <span class="mt-auto">{{$user->country->country_name}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="me-2 ms-auto">
                                    @if(Auth::user()->isAdmin)
                                        <a class="btn btn-danger" id="deleteButton"
                                           onclick="return confirm('Are you sure you want to delete this user? This is an irreversible action!')"
                                           href="{{ route('users.delete', $user->id) }}">
                                            <i class="bi bi-x-circle"></i></a>
                                    @endif
                                </div>
                                <div class="me-5 collection">
                                    <span class="text-secondary">Collection</span>
                                    <h5 class="text-center">
                                        <span class="text-decoration-none">{{$user->collection_count}}</span>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
