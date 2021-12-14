@extends('layouts.main')

@section( 'title')
    Restaurants Map
@endsection

@section('content')
    @if(Route::has('login'))
        @auth
            <div id="container">
                <div id="map"></div>
                <div id="sidebar">
                    <ul id="places"></ul>
                    <button id="more" class="btn btn-secondary">Load more results</button>
                </div>
            </div>

            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDugtv_uL_V8sIbSc4PVhoF92cUVJr1V1Q&callback=initMap&libraries=places&v=weekly"
                async
            ></script>
        @elseif(Route::has('register'))
            <h3 class="text-center">Please log in for restaurant info</h3>
        @endauth
    @endif
@endsection
