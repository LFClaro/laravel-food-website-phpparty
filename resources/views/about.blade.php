@extends('layouts.main')

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

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col">
                        <img src="{{asset('/img/profiles/tim-profile.jpg')}}" width="180" height="180" alt="Two people enjoying food together"/>

                    <h2 class="text-warning">Tim Burns</h2>
                    <p>Hi, I'm Tim. I have previously worked in financial sales and switched my career path during the pandemic.</p>
                    <p>Now I am focusing on coding and managing great projects, from web apps and mobile apps to working on database optimization and management.</p>
                    <p>I am blending my love for code and project building with my experience in sales and managing people. </p>
                    <p><a class="btn btn-secondary" href="/contact">Contact &raquo;</a></p>
                </div><!-- /.col-lg-4 -->





                <div class="col">
                        <img src="{{asset('/img/SVG/undraw_cooking_teal.svg')}}" width="140" height="140" alt="Two people enjoying food together"/>

                    <h2>Recipes</h2>
                    <p>Here you can have access to recipes from all over the world. We have a database with numerous recipes from more than 80 countries for your taste.</p>
                    <p><a class="btn btn-secondary" href="/recipes">View Recipes &raquo;</a></p>
                </div><!-- /.col-lg-4 -->




                <div class="col">
                        <img src="{{asset('/img/SVG/undraw_Eating_together_teal.svg')}}" width="140" height="140" alt="Two people enjoying food together"/>

                    <h2>Restaurants</h2>
                    <p>Looking to find your new favourite restaurant? You've come to the right place! We have a database with different cuisines from around the globe.</p>
                    <p><a class="btn btn-secondary" href="/restaurants">View Restaurants &raquo;</a></p>
                </div><!-- /.col-lg-4 -->




                <div class="col">
                        <img src="{{asset('/img/SVG/undraw_online_groceries_teal.svg')}}" width="140" height="140" alt="Tim Burns Profile picture"/>

                    <h2>Your Menus</h2>
                    <p>Turn it into a unique experience for your taste buds. Sign up now to receive tailor-made recommendations based on your taste and preferences.</p>
                    <p><a class="btn btn-secondary" href="#">Sign Up &raquo;</a></p>
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
