@extends('layouts.main')

@section( 'title')
    Restaurants
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">Restaurant List</h1>
        <p class="text-center"><a href="{{ url("review/create") }}" class="btn btn-success text-light">Add Review</a></p>
        <table class="table table-striped table-light text-dark table-hover">
            <thead>
            <tr class="text-center text-black">
                <th>Comment</th>
                <th>Restaurant_id</th>
                <th>user_id</th>
                <th>create at</th>
                <th>updated at</th>
                <th colspan="2">OPTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($restaurantReviews as $r)
                <tr onclick="window.location='{{ url('restaurants', $r->id) }}';">
                    <td>{{$r->comment}}</td>
                    <td>{{$r->restaurant_id}}</td>
                    <td>{{ $r->user_id }}</td>
                    <td>{{$r->create_at}}</td>
                    <td>{{$r->update_at}}</td>
                    <td>
{{--                        ???--}}
                        <form method="get" action="{{ url('review/' . $r->id . '/edit')}}">
                            @csrf
                            <input type="submit" class="btn btn-primary text-light" value="Update" />
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ url('restaurants/' . $r->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger text-light" value="Delete" />
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
