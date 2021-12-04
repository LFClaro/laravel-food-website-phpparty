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
        <table class="table table-striped table-dark table-hover">
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
                        <form method="post" action="{{ url('recipereview/' . $rev->id)}}">
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
        <p><a href="{{ url("recipereview/create") }}" class="btn btn-success me-2 float-right">Add a Review</a></p>
    </div>
@endsection
@section('footer')
    @parent
@endsection
