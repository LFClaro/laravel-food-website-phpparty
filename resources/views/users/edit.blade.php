@extends('layouts.main')

@section( 'title')
    Update {{ $user->first_name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <form action="{{ url('users', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fname">First Name: </label>
                <input type="text" class="form-control" name="fname" id="fname" value="{{ $user->first_name }}"
                       />
            </div>
            <div class="form-group">
                <label for="lname">Last Name: </label>
                <input type="text" class="form-control" name="lname" id="lname"
                       value="{{ $user->last_name }}" />
            </div>
            <div class="form-group">
                <label for="uname">User Name: </label>
                <input type="text" class="form-control" name="uname" id="uname" value="{{ $user->user_name }}"
                       />
            </div>
            <div class="form-group">
                <label for="email">E-Mail: </label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}"
                       />
            </div>
            <div class="form-group">
                <label for="role">Role: </label>
                <input type="text" class="form-control" name="role" id="role" value="{{ $user->role }}"
                       />
            </div>
            <br />
            <div class="row">
                <button type="submit" name="btnUserRole"
                        class="btn btn-success text-light float-end" id="btn-submit">
                    Update User
                </button>
            </div>
        </form>
    </div>
@endsection
