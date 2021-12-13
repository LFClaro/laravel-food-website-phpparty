<?php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();

?>
@extends('layouts.main')

@section( 'title')
    {{ $contacts->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        @if (Route::has('login'))
            @auth
                @if($user->role == "admin")
{{--        <h1>Edit Contact Message - {{ $contacts->name }}</h1>--}}

{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li class="lead text-danger">Error: {{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--        <form action="{{ url('contacts', $contacts->id) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}
{{--            <div class="form-group">--}}
{{--                <label for="make">Name: </label>--}}
{{--                <input type="text" class="form-control" name="name" id="name" value="{{ $contacts->name }}"--}}
{{--                    placeholder="Enter Name">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="model">eemail: </label>--}}
{{--                <input type="text" class="form-control" name="email" id="email"--}}
{{--                          placeholder="Enter description" value="{{ $contacts->email }}">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="year">Subject: </label>--}}
{{--                <textarea type="text" class="form-control" name="subject" id="subject"--}}
{{--                          placeholder="Enter ingredients">{{ $contacts->subject }}</textarea>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="year">Message: </label>--}}
{{--                <textarea type="text" class="form-control" name="message" id="message"--}}
{{--                          placeholder="Enter steps">{{ $contacts->message }}</textarea>--}}
{{--            </div>--}}

{{--            <button type="submit" name="editRestaurant"--}}
{{--                    class="btn btn-success text-light float-end" id="btn-submit">--}}
{{--                Update Recipes--}}
{{--            </button>--}}
{{--        </form>--}}
                @endif
            @endauth
        @endif
    </div>
@endsection
