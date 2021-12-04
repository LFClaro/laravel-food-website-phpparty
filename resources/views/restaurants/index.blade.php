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
        <p class="text-center"><a href="{{ url("restaurants/create") }}" class="btn btn-success text-light">Add Restaurant</a></p>
        <table class="table table-striped table-light text-dark table-hover">
            <thead class="text-center text-black text-capitalize">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Menu</th>
                <th>E-Mail</th>
                <th>Website</th>
                <th>Comments</th>
                <th>Rating</th>
                <th>Country</th>
                <th colspan="2">Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($restaurants as $r)
                <tr onclick="window.location='{{ url('restaurants', $r->id) }}';">
                    <td><a href="{{ url('restaurants', $r->id) }}" class="link-info text-decoration-none">{{ $r->name }}</a></td>
                    <td>{{ $r->address }}</td>
                    <td><a href="tel:+1{{ $r->phone }}" class="link-info text-decoration-none">{{ $r->phone }}</a></td>
                    <td>{{ $r->menu_options }}</td>
                    <td><a href="mailto:{{ $r->email }}" class="link-info text-decoration-none">{{ $r->email }}</a></td>
                    <td><a href="{{ $r->website }}" class="link-info text-decoration-none">{{ $r->website }}</a></td>
                    <td>{{ $r->comments }}</td>
                    <td>{{ $r->rating }}</td>
                    <td>{{ $r->country->name }}</td>
                    <td>
                        <form method="get" action="{{ url('restaurants/' . $r->id . '/edit')}}">
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
