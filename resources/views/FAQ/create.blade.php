@extends('layouts.main')

@section( 'title')
    Contact Us
@endsection

@section(('header'))
    @parent
@endsection
@section('content')

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <h1 class="featurette-heading text-light text-center">Contact PHParty Below!</h1>

            <div class="col">
                <h2 class="text-light featurette-heading">Thanks in advance!</h2> <!-- TODO use get or post method to send data -->
                <form action="{{ url('faqs') }}" method="post">
                    @csrf
                    <div> Question" class="btn-primary rounded py-2 px-4">
                            <span class="submitting"></span>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Question" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Send
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection
