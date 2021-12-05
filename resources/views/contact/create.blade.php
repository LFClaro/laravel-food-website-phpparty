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
                <h2 class="text-warning featurette-heading">Let's talk about everything!</h2>
                <p class="lead">We would love to hear from you, tells us about you like, your concerns, your questions or just whats your favourite meal or restaurant!</p>

                <img src="{{asset('/img/SVG/convo.svg')}}" width="360" height="360" alt="Two people enjoying food together"/>
            </div><!-- /.col-lg-4 -->

            <div class="col">
                <h2 class="text-light featurette-heading">Thanks in advance!</h2> <!-- TODO use get or post method to send data -->
                <form action="{{ url('contact') }}" method="post">
                    @csrf
                    <div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn-primary rounded py-2 px-4">
                            <span class="submitting"></span>
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