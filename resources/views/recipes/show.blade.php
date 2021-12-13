<?php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();

?>

@extends('layouts.main')

@section( 'title')
    {{ $recipes->name }}
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

        @if (Route::has('login'))
            @auth
        <div>
            <h4>Add Review </h4>
            <form action="{{ url('recipereview') }}" method="post">
                @csrf
                <div class="form-group">
                <!--TODO: Work on it-->
                    <input type="hidden" class="form-control" name="user_id" id="userid"
                           value="{{Auth::id()}}" />
                </div>
                <div class="form-group">
                <!--TODO: Work on it-->
                    <input type="hidden" class="form-control" name="recipe_id" id="recipeid"
                           value="{{$recipes->id}}" />
                </div>
                <div class="form-group">
                    <label for="comment">Comment: </label>
                    <textarea type="text" class="form-control" name="comment" id="comment"
                              placeholder="Enter Comments"></textarea>
                </div>
                <br />
                <input type="submit" name="addReview"
                       class="btn btn-success float-right" value="Comment" />
                <a href="{{ url('recipereview') }}" id="btn_back" class="btn btn-success float-left">Back</a>
            </form>
        </div>
    @endauth
    @endif
@endsection
