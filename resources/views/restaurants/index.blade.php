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
            <thead>
            <tr class="text-center text-black">
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
                    <td><a href="{{ url('restaurants', $r->id) }}" class="text-dark">{{ $r->name }}</a></td>
                    <td>{{ $r->address }}</td>
                    <td><a href="tel:+1{{ $r->phone }}" class="text-dark">{{ $r->phone }}</a></td>
                    <td>{{ $r->menu_options }}</td>
                    <td><a href="mailto:{{ $r->email }}" class="text-dark">{{ $r->email }}</a></td>
                    <td><a href="{{ $r->website }}" class="text-dark">{{ $r->website }}</a></td>
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
