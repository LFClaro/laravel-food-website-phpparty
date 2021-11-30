@extends('layouts.main')

@section( 'title')
    Update {{ $restaurant->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <form action="{{ url('restaurants', $restaurant->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="make">Name: </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $restaurant->name }}"
                    placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="model">Address: </label>
                <input type="text" class="form-control" name="address" id="address"
                    value="{{ $restaurant->address }}" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="year">Phone: </label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $restaurant->phone }}"
                    placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label for="email">E-Mail: </label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $restaurant->email }}"
                       placeholder="Enter E-Mail">
            </div>
            <div class="form-group">
                <label for="menu_options">Menu Options: </label>
                <input type="text" class="form-control" name="menu_options" id="menu_options" value="{{ $restaurant->menu_options }}"
                       placeholder="Enter Menu Options">
            </div>
            <div class="form-group">
                <label for="website">Website: </label>
                <input type="text" class="form-control" name="website" id="website" value="{{ $restaurant->website }}"
                       placeholder="Enter Website">
            </div>
            <div class="form-group">
                <label for="comments">Comments: </label>
                <input type="text" class="form-control" name="comments" id="comments" value="{{ $restaurant->comments }}"
                       placeholder="Enter Comments">
            </div>
            <div class="form-group">
                <label for="rating">Rating: </label>
                <input type="number" min="0" max="5" step="1" class="form-control" name="rating" id="rating" value="{{ $restaurant->rating }}">
            </div>
            <div class="form-group">
                <label for="country_id">Country: </label>
                <select class="form-control" name="country_id" id="country_id" value="">
                    @foreach($countries as $country)
                        @if($country->id === $restaurant->country_id)
                            <option value="{{$country->id}}" selected>{{$country->name}}</option>
                        @else
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br />
            <div class="row">
                <div class="col">
                    <a href="{{ url('restaurants') }}" id="btn_back" class="btn btn-danger text-light float-start">Back</a>
                </div>
                <div class="col">
                    <button type="submit" name="editRestaurant"
                            class="btn btn-success text-light float-end" id="btn-submit">
                        Update Restaurant
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
