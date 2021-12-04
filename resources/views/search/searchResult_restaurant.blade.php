@extends('layouts.main')

@section(('header'))
    @parent
@endsection

@section('content')

    <div class="container align-items-center justify-content-center">
        <h1>{{ $restaurant->name }}</h1>
        <h3>{{ $restaurant->address }}</h3>
        <br /><br />
        <h4>User Reviews</h4>
        @foreach($reviews as $review)
            <p>{{$review->comment}}</p>
        @endforeach
        <a href="{{ url('restaurants') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>

@endsection

@section('footer')
    @parent
@endsection
