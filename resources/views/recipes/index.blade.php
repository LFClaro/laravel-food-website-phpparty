@extends('layouts.main')

@section( 'title')
    Recipes
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">Recipe List</h1>
        <table class="table table-striped table-dark table-hover">
            <thead>
            <tr>
                <th>NAME</th>
                <th>Description</th>
                <th>Ingredients</th>
                <th>Steps</th>
                <th>Website</th>
                <th>Comments</th>
                <th>Calories</th>
                <th>Servings</th>
                <th>Rating</th>
                <th>Country</th>
                <th colspan="2">OPTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipes as $r)
                <tr onclick="window.location='{{ url('recipes', $r->id) }}';">
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->name }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->description }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->ingredients }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->steps }}</a></td>
                    <td><a href="{{ $r->website }}" class="text-light">{{ $r->website }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->comments }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->calories }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->servings }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->rating }}</a></td>
                    <td><a href="{{ url('recipes', $r->id) }}" class="text-light">{{ $r->country->name }}</a></td>
                    <td>
                        <form method="get" action="{{ url('recipes/' . $r->id . '/edit')}}">
                            @csrf
                            <input type="submit" class="btn btn-primary me-2" value="Update" />
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ url('recipes/' . $r->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger me-2" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br />
        <p><a href="{{ url("recipes/create") }}" class="btn btn-success me-2 float-right">Add Restaurant</a></p>
    </div>
@endsection
@section('footer')
    @parent
@endsection
