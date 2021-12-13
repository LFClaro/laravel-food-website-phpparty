@extends('layouts.main')

@section( 'title')
    FAQs
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">FAQs</h1>
        <p class="text-center"><a href="{{ url("faqs/create") }}" class="btn btn-success text-light">Send us a message</a></p>
            @foreach($faqs as $f)
            <h4>{{ $f->question }}</h4>
            &emsp;<p>{{ $r->answer }}</p><br/>
            @endforeach
    </div>
@endsection
@section('footer')
    @parent
@endsection
