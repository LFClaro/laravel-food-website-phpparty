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
        <p class="text-center"><a href="{{ url("recipes/create") }}" class="btn btn-success text-light">Add Recipe</a></p>
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
                    <td><a href="{{ url('recipes', $r->id) }}" class="link-info text-decoration-none">{{ $r->name }}</a></td>
                    <td>{{ $r->description }}</td>
                    <td><a href="{{ $r->website }}" class="link-info text-decoration-none">{{ $r->website }}</a></td>
                    <td>{{ $r->calories }}</td>
                    <td>{{ $r->servings }}</td>
                    <td>{{ $r->rating }}</td>
                    <td>{{ $r->country->name}}</td>
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
    </div>
@endsection
@section('footer')
    @parent
@endsection
