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
        <table class="table table-striped table-dark table-hover">
            <thead>
            <tr>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
                <th>MENU</th>
                <th>E-MAIL</th>
                <th>WEBSITE</th>
                <th>COMMENTS</th>
                <th>RATING</th>
                <th>COUNTRY</th>
                <th colspan="2">OPTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($restaurants as $r)
                <tr onclick="window.location='{{ url('restaurants', $r->id) }}';">
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->name }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->address }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->phone }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->menu_options }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->email }}</a></td>
                    <td><a href="{{ $r->website }}" class="text-light">{{ $r->website }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->comments }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->rating }}</a></td>
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-light">{{ $r->country->name }}</a></td>
                    <td>
                        <form method="get" action="{{ url('restaurants/' . $r->id . '/edit')}}">
                            @csrf
                            <input type="submit" class="btn btn-primary me-2" value="Update" />
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ url('restaurants/' . $r->id)}}">
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
        <p><a href="{{ url("restaurants/create") }}" class="btn btn-success me-2 float-right">Add Restaurant</a></p>
    </div>
@endsection
@section('footer')
    @parent
@endsection
