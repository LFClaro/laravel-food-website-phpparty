@extends('layouts.main')

@section( 'title')
    Add Recipe
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>Add Recipe </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="lead text-danger">Error: {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('recipes') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="make">Name: </label>
                <input type="text" class="form-control" name="name" id="name"
                       placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="model">Description: </label>
                <textarea type="text" class="form-control" name="description" id="description"
                          placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
                <label for="year">Ingredients: </label>
                <textarea type="text" class="form-control" name="ingredients" id="ingredients"
                          placeholder="Enter ingredients"></textarea>
            </div>
            <div class="form-group">
                <label for="year">Steps: </label>
                <textarea type="text" class="form-control" name="steps" id="steps"
                          placeholder="Enter steps"></textarea>
            </div>
            <div class="form-group">
                <label for="year">Website: </label>
                <input type="text" class="form-control" name="website" id="website"
                       placeholder="Enter website">
            </div>
            <div class="form-group">
                <label for="year">Comments: </label>
                <textarea type="text" class="form-control" name="comments" id="comments"
                          placeholder="Enter comments"></textarea>
            </div>
            <div class="form-group">
                <label for="make">Calories: </label>
                <input type="number" class="form-control" name="calories" id="calories"
                       placeholder="Enter calories" min="0" max="32767">
            </div>
            <div class="form-group">
                <label for="make">Serving: </label>
                <input type="number" class="form-control" name="serving" id="serving"
                       placeholder="Enter serving" min="0" max="255">
            </div>
            <div class="form-group">
                <label for="make">Rating: </label>
                <input type="number" class="form-control" name="rating" id="rating"
                       placeholder="Enter rating" min="0" max="5">
            </div>
            <div class="form-group">
                <label for="country_id">Country: </label>
                <select class="form-control" name="country_id" id="country_id" value="">
                    @foreach($countries as $country)
                        // TODO: logic for selected country
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" name="addRecipe"
                    class="btn btn-success float-right" id="btn-submit">
                Add Recipe
            </button>
            <br />
            <a href="{{ url('recipes') }}" id="btn_back" class="btn btn-danger float-left">Back</a>
        </form>
    </div>
@endsection
