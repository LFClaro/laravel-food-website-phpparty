@extends('layouts.main')

@section( 'title')
    Restaurants
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">Restaurant List</h1>

        @if(Route::has('login'))
            @auth
                @if(Auth::user()->role == 'admin')
                    <p class="text-center"><a href="{{ url("restaurants/create") }}" class="btn btn-success text-light">Add
                            Restaurant</a></p>
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
                            {{--@if(\Illuminate\Support\Facades\Auth::user()->role != null)--}}
                            <th colspan="2">Options</th>
                            {{--@endif--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($restaurants as $r)
                            <tr onclick="window.location='{{ url('restaurants', $r->id) }}';">
                                <td><a href="{{ url('restaurants', $r->id) }}"
                                       class="link-info text-decoration-none">{{ $r->name }}</a></td>
                                <td>{{ $r->address }}</td>
                                <td><a href="tel:+1{{ $r->phone }}"
                                       class="link-info text-decoration-none">{{ $r->phone }}</a></td>
                                <td>{{ $r->menu_options }}</td>
                                <td><a href="mailto:{{ $r->email }}"
                                       class="link-info text-decoration-none">{{ $r->email }}</a></td>
                                <td><a href="{{ $r->website }}"
                                       class="link-info text-decoration-none">{{ $r->website }}</a></td>
                                <td>{{ $r->comments }}</td>
                                <td>{{ $r->rating }}</td>
                                <td>{{ $r->country->name }}</td>
                                <td>
                                    <form method="get" action="{{ url('restaurants/' . $r->id . '/edit')}}">
                                        @csrf
                                        <input type="submit" class="btn btn-primary text-light" value="Update"/>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="{{ url('restaurants/' . $r->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger text-light" value="Delete"/>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br/>
    </div>
    @else
        @foreach($restaurants as $r)
            <div class="row featurette align-self-center">
                <div class="col">
                    <h2 class="featurette-heading text-warning"><a href="{{ url('restaurants', $r->id) }}"
                                                                   class="link-info text-decoration-none text-warning">{{ $r->name }}</a>
                    </h2>
                    <p class="lead">
                        {{ $r->address }}
                    </p>
                    <p class="lead">{{ $r->country->name }} Cuisine</p>
                    <p><a href="tel:+1{{ $r->phone }}" class="link-info text-decoration-none text-highlighted lead">{{ $r->phone }}</a></p>
                    <p><a href="{{ $r->website }}"
                          class="link-info text-decoration-none text-highlighted lead">{{ $r->website }}</a></p>
                    <p><a href="mailto:{{ $r->email }}" class="link-info text-decoration-none text-highlighted lead">{{ $r->email }}</a></p>
                </div>
            </div>
            <br><br>
        @endforeach
    @endif
    @elseif(Route::has('register'))
        <h3 class="text-center">Please log in for restaurant info</h3>
    @else
        <h1>ERROR</h1>
    @endauth
    @endif
@endsection
