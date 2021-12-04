@extends('layouts.main')

@section(('header'))
    @parent
@endsection

@section('content')

    <div class="container align-items-center justify-content-center">
        @foreach($restaurants as $r)
            Restaurant: <a href="{{ url('restaurants', $r->id) }}"
                           class="link-info text-decoration-none">{{ $r->name }}</a><br />
        @endforeach
        @foreach($recipes as $r)
            Recipe: <a href="{{ url('recipes', $r->id) }}" class="link-info text-decoration-none">{{ $r->name }}</a><br />
        @endforeach

        <a href="{{ url('/restaurants') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>

@endsection

@section('footer')
    @parent
@endsection
