@extends('layouts.main')

@section( 'title')
    Recipe Review
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">Recipe Review List</h1>
        <p class="text-center"><a href="{{ url("recipereview/create") }}" class="btn btn-success text-light">Add Review</a></p>
        <table class="table table-striped table-light text-dark table-hover">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Recipe Id</th>
                <th>Comment</th>
                <th >OPTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipeReview as $rev)
                <tr onclick="window.location='{{ url('recipereview', $rev->id) }}';">
                    <td>{{ $rev->user_id }}</td>
                    <td>{{ $rev->recipe_id }}</td>
                    <td>{{ $rev->comment }}</td>
                    <td>
                        <form method="post" action="{{ url('recipereview/'.$rev->id)}}">
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
