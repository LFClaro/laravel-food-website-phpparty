@extends('layouts.main')

@section( 'title')
    Update Review
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <form action="{{ url('review', $restaurantReview->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Comment">Name: </label>
                <input type="text" class="form-control" name="comment" id="comment" value="{{ old('comment',$restaurantReview->comment) }}"
                       placeholder="Enter comment">
            </div>

            <br />
            <div class="row">
                <div class="col">
                    <a href="{{ url('review') }}" id="btn_back" class="btn btn-danger text-light float-start">Back</a>
                </div>
                <div class="col">
                    <button type="submit" name="editReview"
                            class="btn btn-success text-light float-end" id="btn-submit">
                        Update Comment
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
