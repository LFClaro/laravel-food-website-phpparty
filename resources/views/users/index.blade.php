@extends('layouts.main')

@section( 'title')
    Users
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    @if(Route::has('login'))
        @auth
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">List of Users</h1>
        <table class="table table-striped table-light text-dark table-hover">
            <thead class=" text-black text-capitalize">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Id</th>
                <th>Email</th>
                <th>Role</th>
                <th colspan="2">Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{ $u->first_name }}</td>
                    <td>{{ $u->last_name }}</td>
                    <td>{{ $u->user_name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role }}</td>
                    <td>
                        @if($u->role != 'admin')
                        <form method="get" action="{{ url('users/' . $u->id . '/edit')}}">
                            @csrf
                            <input type="submit" class="btn btn-primary me-2" value="Update Role" />
                        </form>
                        @endif
                    </td>
                    <td>
                        <form method="post" action="{{ url('users', $u->id) }}">
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
        @elseif (Route::has('users'))
            <h2 class="text-danger">Access Rejected</h2>
        @endauth
    @endif
@endsection
@section('footer')
    @parent
@endsection
