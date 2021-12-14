<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();

$apiRecipeUrl = 'https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/extract?rapidapi-key=';
$apiNutritionUrl = 'https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/guessNutrition?rapidapi-key=';
$apiKey = 'e91b43eb22msh27afb7fecb1ca62p1ece39jsn3bd0cec1b4d7';

?>


@extends('layouts.main')

@section( 'title')
    Recipes
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">Recipe List</h1>


        @if (Route::has('login'))
            @auth
                <p class="text-center"><a href="{{ url("recipes/create") }}" class="btn btn-success text-light">Add
                        Recipe</a></p>
                @if($user->role == "admin")
                    <table class="table table-striped table-light text-dark table-hover">
                        <thead class="text-center text-black text-capitalize">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Website</th>
                            <th>Calories</th>
                            <th>Servings</th>
                            <th>Rating</th>
                            <th>Country</th>
                            <th colspan="2">Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recipes as $r)
                            <tr onclick="window.location='{{ url('recipes', $r->id) }}';">
                                <td><a href="{{ url('recipes', $r->id) }}"
                                       class="link-info text-decoration-none">{{ $r->name }}</a></td>
                                <td>{{ $r->description }}</td>
                                <td><a href="{{ $r->website }}"
                                       class="link-info text-decoration-none">{{ $r->website }}</a></td>
                                <td>{{ $r->calories }}</td>
                                <td>{{ $r->servings }}</td>
                                <td>{{ $r->rating }}</td>
                                <td>{{ $r->country->name}}</td>
                                <td>
                                    <form method="get" action="{{ url('recipes/' . $r->id . '/edit')}}">
                                        @csrf
                                        <input type="submit" class="btn btn-primary me-2" value="Update"/>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="{{ url('recipes/' . $r->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger me-2" value="Delete"/>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br/>
    </div>
    @else
        @foreach($recipes as $r)
            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading text-warning"><a href="{{ url('recipes', $r->id) }}"
                                                                   class="link-info text-decoration-none text-warning">{{ $r->name }}</a>
                    </h2>
                    <p class="lead">
                        {{ $r->description }}
                    </p>
                    <p><a href="{{ $r->website }}"
                          class="link-info text-decoration-none text-highlighted lead">{{ $r->website }}</a></p>
                    <p class="lead">The number of calories: {{ $r->calories }}</p>
                    <p class="lead">The number of servings: {{ $r->servings }}</p>
                    <p class="lead">Rating: {{ $r->rating }}</p>
                    <p class="lead">Country of origin: {{ $r->country->name}}</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                    <div class="featurette-image img-fluid align-self-center">
                        <img width="450"
                             src="{{$response = Http::get($apiRecipeUrl . $apiKey . '&url=' . $r->website)['image']}}"
                             alt="Picture of recipe / food"/>
                    </div>
                </div>
            </div>
            <br><br>
            @endforeach
            </div>
            @endif

            @elseif(Route::has('register') )
                <h3 class="text-center">To add a recipe, please login</h3>
                @foreach($recipes as $r)
                    <div class="row featurette align-items-center">
                        <div class="col-md-7 mx-auto order-md-2">
                            <h2 class="featurette-heading text-warning"><a href="{{ url('recipes', $r->id) }}"
                                                                           class="link-info text-decoration-none text-warning">{{ $r->name }}</a>
                            </h2>
                            <p class="lead">
                                {{ $r->description }}
                            </p>
                            <p><a href="{{ $r->website }}"
                                  class="link-info text-decoration-none text-highlighted lead">{{ $r->website }}</a></p>
                            <p class="lead">The number of calories: {{ $r->calories }}</p>
                            <p class="lead">The umber of servings: {{ $r->servings }}</p>
                            <p class="lead">Rating: {{ $r->rating }}</p>
                            <p class="lead">Country of origin: {{ $r->country->name}}</p>
                        </div>
                        <div class="col-md-5 mx-auto order-md-1">
                            <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                            <div class="featurette-image img-fluid mx-auto">
                                <img width="450"
                                     src="{{$response = Http::get($apiRecipeUrl . $apiKey . '&url=' . $r->website)['image']}}"
                                     alt="Picture of recipe / food"/>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                    </div>
                    @else
                        <p>ERROR</p>
                    @endauth
                    @endif
@endsection
