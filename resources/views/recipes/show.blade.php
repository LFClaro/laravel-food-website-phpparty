@extends('layouts.main')

@section( 'title')
    {{ $recipes->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>{{ $recipes->name }}</h1>
        <h3>{{ $recipes->description}}</h3>
        <h4>Description</h4>
        <p>{{ $recipes->description}}</p>
        <h4>Steps</h4>
        <p>{{ $recipes->steps}}</p>
        <br /><br />
        <a href="{{ url('recipes') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>
@endsection
