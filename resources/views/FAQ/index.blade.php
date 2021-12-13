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
        <p class="text-center"><a href="{{ url("contact/create") }}" class="btn btn-success text-light">Send us a message</a></p>
{{--        <table class="table table-striped table-light text-dark table-hover">--}}
{{--            <thead class="text-center text-black text-capitalize">--}}
{{--            <tr>--}}
{{--                <th>Question</th>--}}
{{--                <th>Answer</th>--}}
{{--                --}}{{--@if(\Illuminate\Support\Facades\Auth::user()->role != null)--}}
{{--                --}}{{--@endif--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}

            @foreach($faqs as $f)

            <h4>{{ $f->question }}</h4>
            &emsp;<p>{{ $r->answer }}</p>
{{--                <tr>--}}
{{--                    <td>{{ $f->question }}</td>--}}
{{--                    <td>{{ $r->answer }}</td>--}}
{{--                </tr>--}}
            @endforeach
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <br />--}}


    </div>
@endsection
@section('footer')
    @parent
@endsection
