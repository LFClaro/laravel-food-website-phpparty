@extends('layouts.main')

@section(('header'))
    @parent
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>{{ $recipes->name }}</h1>
        <br>
        <h4>Description</h4>
        <p>{{ $recipes->description}}</p>
        <h4>Steps</h4>
        <p>{{ $recipes->steps}}</p>
        <h4>Comments</h4>
        <p>{{ $recipes->comments}}</p>

        <h4>User Reviews</h4>
        @foreach($reviews as $review)
            @if($review->recipe_id === $recipes->id)
                <p>{{$review->comment}}</p>
            @endif
        @endforeach
        <br /><br />
        <a href="{{ url('/restaurants') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>


@endsection

@section('footer')
    @parent
@endsection
