@extends('layouts.main')

@section( 'title')
    Add a Review
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>Add Review </h1>
        <form action="{{ url('recipereveiw') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="userid">User Id: </label>
                <input type="text" class="form-control" name="userid" id="userid"
                       placeholder="Enter Name" />
            </div>
            <div class="form-group">
                <label for="recipeid">Recipe Id: </label>
                <input type="text" class="form-control" name="recipeid" id="recipeid"
                          placeholder="Enter description" />
            </div>
            <div class="form-group">
                <label for="comment">Ingredients: </label>
                <textarea type="text" class="form-control" name="comment" id="comment"
                          placeholder="Enter ingredients"></textarea>
            </div>
            <input type="submit" name="addRecipe"
                    class="btn btn-success float-right" id="btn-submit" value="Comment" />

            <br />
            <a href="{{ url('recipesreviw') }}" id="btn_back" class="btn btn-danger float-left">Back</a>
        </form>
    </div>
@endsection
