@extends('layouts.app')
@section('content')
    <style>
        @media (max-width: 576px) {
            body {
                background-color: #212529;
            }

            .placesDiv {
                justify-content: center;
                border: none !important;
                width: 100vw !important;
                border-radius: 0 !important;
            }
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaXIqLyJLc1bPizPIVYWUlf92vxs8wAkY"></script>
    <div class="container-fluid">
        <div class="placesDiv container col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
            <h2>{{__('views.places')}}</h2>
            <form method="post" action="">
                @csrf
                <input type="text" name="name" placeholder="Place name">
                <input type="text" name="address" placeholder="Address">
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <div id="map" style="width: 100%; height: 400px;"></div>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
