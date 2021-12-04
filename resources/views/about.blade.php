@extends('layouts.main')

@section( 'title')
    About Us
@endsection

@section(('header'))
    @parent
@endsection
@section('content')

    <div class="container marketing">
        <h1 class="featurette-heading text-light text-center">About PHParty</h1>
        <h4 class="featurette text-light text-center">We are a team of coders with a wide range of skills</h4>

        <br><br><br>
        <!-- Each person can have about me section -->
        <div class="container marketing">
            <div class="row">
                <div class="col">
                        <img src="{{asset('/img/profiles/tim-profile.jpg')}}" width="180" height="180" alt="Tim Burns Profile pic"/>

                    <h2 class="text-warning">Tim Burns</h2>
                    <p>Hi, I'm Tim! I have previously worked in financial sales and switched my career path during the pandemic.</p>
                    <p>Now I am focusing on coding and managing great projects, from web apps and mobile apps to working on database optimization and management.</p>
                    <p>I am blending my love for code and project building with my experience in sales and managing people. </p>
                    <p><a class="btn btn-secondary" href="/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col">
                        <img src="{{asset('/img/profiles/luiz-profile.jpg')}}" width="180" height="180" alt="Luiz Claro profile pic"/>

                    <h2 class="text-warning">Luiz Claro</h2>
                    <p>Hey, I'm Luiz! I'm an experienced Video Producer with 12 years of work in the film and TV industry.</p>
                    <p>My media and communication skills have led me to develop an interest in all things media.</p>
                    <p>So, I've decided to expand my skill set by becoming a Full Stack Developer for web and mobile apps so that I can offer complete multimedia solutions for my clients.</p>
                    <p><a class="btn btn-secondary" href="/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col">
                    <img src="{{asset('/img/profiles/alex-profile.jpeg')}}" width="180" height="180" alt="yunqian Xu profile pic"/>
                    <h2 class="text-warning">Yunqian(Alex) Xu</h2>
                    <p>Hey, I'm Alex! This is my first touch to this field.</p>
                    <p>I was attracted by the story of Harry Potter when I was young.</p>
                    <p>I image I am deploying magic while I am coding sometime. And I hope my kids may live in a magic world I coded in the future.</p>
                    <p><a class="btn btn-secondary" href="/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col">
                        <img src="{{asset('/img/SVG/undraw_online_groceries_teal.svg')}}" width="140" height="140" alt="Tim Burns Profile picture"/>

                    <h2 class="text-warning">Put Your Name Here</h2>
                    <p>Place Your Personal Info Here</p>
                    <p><a class="btn btn-secondary" href="#/contact/create">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Search recipes and restaurants. <span class="text-highlighted">It's a world-class menu.</span></h2>
                    <p class="lead">Search our page for incredible options in the most diverse cuisines, filtered by country, ingredients or dietary restrictions.</p>
                </div>
                <div class="col-md-5">
                    <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                    <div class ="featurette-image img-fluid mx-auto">
                        <img width="500" height="500" src="{{asset('/img/SVG/undraw_special_event_orange.svg')}}" alt="A special event" />
                    </div>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-highlighted">See for yourself.</span></h2>
                    <p class="lead">You can look up restaurants by area in our interactive map, which provides venue-related info like reviews events and parking.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                    <div class ="featurette-image img-fluid mx-auto">
                        <img width="450" height="450" src="{{asset('/img/SVG/undraw_tourist_map_re_orange.svg')}}" alt="A map of an unmarked neighbourhood" />
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Take care of your diet, <span class="text-highlighted">even while exploring the world.</span></h2>
                    <p class="lead">View calorie count of our recipes and organize them in weekly meal plans based on your diet and preferences.</p>
                </div>
                <div class="col-md-5">
                    <!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                    <div class ="featurette-image img-fluid mx-auto">
                        <img width="450" height="450" src="{{asset('/img/SVG/undraw_diet_orange.svg')}}" alt="Person choosing form different diets" />
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/js/bootstrap.min.js"></script>


@endsection
@section('footer')
    @parent
@endsection
