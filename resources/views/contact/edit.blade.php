@extends('layouts.main')

@section( 'title')
    {{ $contacts->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>Edit Recipe - {{ $contacts->name }}</h1>
        <form action="{{ url('contacts', $contacts->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="make">Name: </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $contacts->name }}"
                    placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="model">Description: </label>
                <input type="text" class="form-control" name="description" id="description"
                          placeholder="Enter description" value="{{ $contacts->email }}">
            </div>
            <div class="form-group">
                <label for="year">Ingredients: </label>
                <textarea type="text" class="form-control" name="ingredients" id="ingredients"
                          placeholder="Enter ingredients">{{ $contacts->subject }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Steps: </label>
                <textarea type="text" class="form-control" name="steps" id="steps"
                          placeholder="Enter steps">{{ $contacts->message }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Website: </label>
                <input type="text" class="form-control" name="website" id="website" value="{{ $contacts->website }}"
                          placeholder="Enter website">{{ $contacts->website }}
            </div>
            <div class="form-group">
                <label for="year">Comments: </label>
                <textarea type="text" class="form-control" name="comments" id="comments"
                          placeholder="Enter comments">{{ $contacts->comments }}</textarea>
            </div>
            <div class="form-group">
                <label for="make">Calories: </label>
                <input type="number" class="form-control" name="calories" id="calories" value="{{ $contacts->calories }}"
                       placeholder="Enter calories" min="0" max="32767">
            </div>
            <div class="form-group">
                <label for="make">Serving: </label>
                <input type="number" class="form-control" name="serving" id="serving" value="{{ $contacts->serving }}"
                       placeholder="Enter serving" min="0" max="255">
            </div>
            <div class="form-group">
                <label for="make">Rating: </label>
                <input type="number" class="form-control" name="rating" id="rating" value="{{ $contacts->rating }}"
                       placeholder="Enter rating" min="0" max="5">
            </div>
            <div class="form-group">
                <label for="country_id">Country: </label>
                <select class="form-control" name="country_id" id="country_id" value="">
                    @foreach($countries as $country)
                        @if($country->id === $contacts->country_id)
                            <option value="{{$country->id}}" selected>{{$country->name}}</option>
                        @else
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div><div class="row">
                <div class="col">
                    <a href="{{ url('contacts') }}" id="btn_back" class="btn btn-danger text-light float-start">Back</a>
                </div>
                <div class="col">
                    <button type="submit" name="editRestaurant"
                            class="btn btn-success text-light float-end" id="btn-submit">
                        Update contacts
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
