@extends('layouts.main')

@section( 'title')
    {{ $restaurants->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <form action="{{ url('restaurants', $restaurants->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="make">Name: </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $restaurants->name }}"
                    placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="model">Address: </label>
                <input type="text" class="form-control" name="address" id="address"
                    value="{{ $restaurants->address }}" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="year">Phone: </label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $restaurants->phone }}"
                    placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label for="country_id">Country: </label>
                <select class="form-control" name="country_id" id="country_id" value="">
                    @foreach($countries as $country)
                        // TODO: logic for selected country
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" name="editRestaurant"
                    class="btn btn-success float-right" id="btn-submit">
                Update Restaurant
            </button>
            <br />
            <a href="{{ url('restaurants') }}" id="btn_back" class="btn btn-danger float-left">Back</a>
        </form>
    </div>
@endsection
