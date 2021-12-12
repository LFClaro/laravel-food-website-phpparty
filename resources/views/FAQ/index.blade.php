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
        <table class="table table-striped table-light text-dark table-hover">

            @foreach($faqs as $f)

            @endforeach
            </tbody>
        </table>
        <br />


    </div>
@endsection
@section('footer')
    @parent
@endsection
