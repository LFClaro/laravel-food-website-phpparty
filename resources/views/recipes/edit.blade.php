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
        @if (Route::has('login'))
            @auth
                @if($user->role == "admin")
        <h1>Edit Recipe - {{ $recipes->name }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="lead text-danger">Error: {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('recipes', $recipes->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="make">Name: </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $recipes->name }}"
                    placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="model">Description: </label>
                <textarea type="text" class="form-control" name="description" id="description"
                          placeholder="Enter description">{{ $recipes->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Ingredients: </label>
                <textarea type="text" class="form-control" name="ingredients" id="ingredients"
                          placeholder="Enter ingredients">{{ $recipes->ingredients }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Steps: </label>
                <textarea type="text" class="form-control" name="steps" id="steps"
                          placeholder="Enter steps">{{ $recipes->steps }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Website: </label>
                <input type="text" class="form-control" name="website" id="website" value="{{ $recipes->website }}"
                          placeholder="Enter website">{{ $recipes->website }}
            </div>
            <div class="form-group">
                <label for="year">Comments: </label>
                <textarea type="text" class="form-control" name="comments" id="comments"
                          placeholder="Enter comments">{{ $recipes->comments }}</textarea>
            </div>
            <div class="form-group">
                <label for="make">Calories: </label>
                <input type="number" class="form-control" name="calories" id="calories" value="{{ $recipes->calories }}"
                       placeholder="Enter calories" min="0" max="32767">
            </div>
            <div class="form-group">
                <label for="make">Serving: </label>
                <input type="number" class="form-control" name="serving" id="serving" value="{{ $recipes->serving }}"
                       placeholder="Enter serving" min="0" max="255">
            </div>
            <div class="form-group">
                <label for="make">Rating: </label>
                <input type="number" class="form-control" name="rating" id="rating" value="{{ $recipes->rating }}"
                       placeholder="Enter rating" min="0" max="5">
            </div>
            <div class="form-group">
                <label for="country_id">Country: </label>
                <select class="form-control" name="country_id" id="country_id" value="">
                    @foreach($countries as $country)
                        @if($country->id === $recipes->country_id)
                            <option value="{{$country->id}}" selected>{{$country->name}}</option>
                        @else
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div><div class="row">
                <div class="col">
                    <a href="{{ url('recipes') }}" id="btn_back" class="btn btn-danger text-light float-start">Back</a>
                </div>
                <div class="col">
                    <button type="submit" name="editRestaurant"
                            class="btn btn-success text-light float-end" id="btn-submit">
                        Update Recipes
                    </button>
                </div>
            </div>
        </form>
                @endif
            @endauth
        @endif
    </div>
@endsection
