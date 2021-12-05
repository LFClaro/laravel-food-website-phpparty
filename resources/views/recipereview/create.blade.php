@extends('layouts.main')

@section( 'title')
    Add a Review
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>Add Review </h1>
        <form action="{{ url('recipereview') }}" method="post">
            @csrf
            <div class="form-group">
                {{--<label for="userid">User Id: </label>
                <input type="text" class="form-control" name="user_id" id="userid"
                       placeholder="Enter User Id" />--}}


                <!--TODO: Work on it-->
                <input type="hidden" class="form-control" name="user_id" id="userid"
                       value="{{$user->id}}" />
            </div>
            <div class="form-group">
                {{--<label for="recipeid">Recipe Id: </label>
                <input type="text" class="form-control" name="recipe_id" id="recipeid"
                          placeholder="Enter id" />--}}

                <!--TODO: Work on it-->
                <input type="hidden" class="form-control" name="user_id" id="userid"
                       value="{{$recipe->id}}" />
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
@endsection
