@extends('layouts.main')

@section( 'title')
    Add Restaurant Review
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <form action="{{ url('review') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="make">Review: </label>
                <input type="text" class="form-control" name="comment" id="comment" value=""
                       placeholder="Enter Review">
            <br />
                <input type="hidden" name = "restaurant_id" value="{{$restaurants->id}}">
            <div class="row">
                <div class="col">
                    <a href="{{ url('restaurants') }}" id="btn_back" class="btn btn-danger text-light float-start">Back</a>
                </div>
                <div class="col">
                    <button type="submit" name="addReview" class="btn btn-success text-light float-end" id="btn-submit">
                        Add Restaurant
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
