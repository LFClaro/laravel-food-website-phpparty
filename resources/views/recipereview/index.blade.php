@extends('layouts.main')

@section( 'title')
    Recipe Review
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    @if(Route::has('login'))
        @auth
            <div class="container align-items-center justify-content-center">
                <h1 class="text-center">Recipe Review List</h1>
                <p class="text-center"><a href="{{ url("recipereview/create") }}" class="btn btn-success text-light">Add Review</a></p>
                <table class="table table-striped table-light text-dark table-hover">
                    <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Recipe Id</th>
                        <th>Comment</th>
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <th >OPTION</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recipeReview as $rev)
                        <tr>
                            <td>{{ $rev->user_id }}</td>
                            <td>{{ $rev->recipe_id }}</td>
                            <td>{{ $rev->comment }}</td>
                            @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                                <td>
                                    <form method="post" action="{{ url('recipereview/' . $rev->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger me-2" value="Delete" />
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br />
            </div>
        @elseif (Route::has('recipereview'))
            <h2 class="text-danger">Access Rejected</h2>
        @endauth
    @endif
@endsection
@section('footer')
    @parent
@endsection
