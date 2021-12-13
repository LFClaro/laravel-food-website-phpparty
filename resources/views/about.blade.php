@extends('layouts.main')

@section( 'title')
    About Us
@endsection

@section('content')

    <div class="container marketing">
        <h1 class="featurette-heading text-light text-center">About PHParty</h1>
        <h4 class="featurette text-light text-center">We are a team of coders with a wide range of skills</h4>

        <br><br><br>
        <!-- Each person can have about me section -->
        <div class="container marketing">
            <div class="row">
                <!--ABOUT TIM-->
                <div class="col">
                        <img src="{{asset('/img/profiles/tim-profile.jpg')}}" width="180" height="180" alt="Tim Burns Profile pic"/>

                    <h2 class="text-warning">Tim Burns</h2>
                    <p>Hi, I'm Tim! I have previously worked in financial sales and switched my career path during the pandemic.</p>
                    <p>Now I am focusing on coding and managing great projects, from web apps and mobile apps to working on database optimization and management.</p>
                    <p>I am blending my love for code and project building with my experience in sales and managing people. </p>
                    <p><a class="btn btn-secondary" href="/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <!--ABOUT LUIZ-->

                <div class="col">
                        <img src="{{asset('/img/profiles/luiz-profile.jpg')}}" width="180" height="180" alt="Luiz Claro profile pic"/>

                    <h2 class="text-warning">Luiz Claro</h2>
                    <p>Hey, I'm Luiz! I'm an experienced Video Producer with 12 years of work in the film and TV industry.</p>
                    <p>My media and communication skills have led me to develop an interest in all things media.</p>
                    <p>So, I've decided to expand my skill set by becoming a Full Stack Developer for web and mobile apps so that I can offer complete multimedia solutions for my clients.</p>
                    <p><a class="btn btn-secondary" href="/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <!--ABOUT ALEX-->
                <div class="col">
                    <img src="{{asset('/img/profiles/alex-profile.jpeg')}}" width="180" height="180" alt="yunqian Xu profile pic"/>
                    <h2 class="text-warning">Yunqian(Alex) Xu</h2>
                    <p>Hey, I'm Alex! This is my first touch to this field.</p>
                    <p>I was attracted by the story of Harry Potter when I was young.</p>
                    <p>I image I am deploying magic while I am coding sometime. And I hope my kids may live in a magic world I coded in the future.</p>
                    <p><a class="btn btn-secondary" href="/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <!--ABOUT CEZMI-->

                <div class="col">
                    <img src="{{asset('/img/profiles/placeholder-profile.svg')}}" width="180" height="180" alt="Cezmi's Profile pic"/>
                    <h2 class="text-warning">Cezmi Aktepe</h2>
                    <p>Writing codes, designing web pages and creating projects was my dream job since I graduated from high school. I love dealing with computers and tech.</p>
                    <p>I found a chance to reach my dream job in Canada. Here I am ...</p>
                    <p><a class="btn btn-secondary" href="#/contact">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <hr class="featurette-divider">
@endsection
