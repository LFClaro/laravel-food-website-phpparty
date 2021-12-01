@extends('layouts.main')

@section( 'title')
    {{ $recipes->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>{{ $recipes->name }}</h1>
        <br>
        <h4>Description</h4>
        <p>{{ $recipes->description}}</p>
        <h4>Steps</h4>
        <p>{{ $recipes->steps}}</p>
        <h4>Comments</h4>
        <p>{{ $recipes->comments}}</p>
        <br>
        <p>{{ $recipes->id->comments}}</p>
        <br /><br />
        <a href="{{ url('recipes') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>
@endsection
