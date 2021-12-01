@extends('layouts.main')

@section( 'title')
    {{ $restaurants->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>{{ $restaurants->name }}</h1>
        <h3>{{ $restaurants->address }}</h3>
        <br /><br />
        <h4>User Reviews</h4>
        @foreach($reviews as $review)
            @if($review->restaurant_id === $restaurants->id)
                <p>{{$review->comment}}</p>
            @endif
        @endforeach
        <a href="{{ url('restaurants') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>
@endsection
