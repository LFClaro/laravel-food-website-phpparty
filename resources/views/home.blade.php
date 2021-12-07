@extends('layouts.main')

@section( 'title')
    Main
@endsection

@section('content')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!--                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#FFC055"/></svg>-->
                <div class="item" style="background-image: url(../img/Photos/IMG_8044-1920x892.jpg);">
                    <img src="{{asset('/img/Photos/IMG_8044-1920x892.jpg')}}"/>
                </div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Around the world in 80 meals.</h1>
                        <p>Explore cuisines from other countries through many exciting recipes.</p>
                        <p><a class="btn btn-lg btn-primary text-light" href="/recipes">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!--                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#FFC055"/></svg>-->
                <div class="item" style="background-image: url(../img/Photos/IMG_7782-1919x538.jpg);">
                    <img src="{{asset('/img/Photos/IMG_7782-1919x538.jpg')}}"/>
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Hungry for new ideas?</h1>
                        <p>We've hand-picked these international restaurants for you.</p>
                        <p><a class="btn btn-lg btn-primary text-light" href="/restaurants">Browse options</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!--                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#FFC055"/></svg>-->
                <div class="item" style="background-image: url(../img/Photos/IMG_8358-1920x892.jpg);">
                    <img src="{{asset('/img/Photos/IMG_8358-1920x892.jpg')}}"/>
                </div>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Travel without leaving your kitchen.</h1>
                        <p>Amazing recipes from all over the world in the palm of your hand.</p>
                        <p><a class="btn btn-lg btn-primary text-light" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#FFC055"/>
                    <img src="{{asset('/img/SVG/undraw_cooking_teal.svg')}}" width="140" height="140" alt="Two people enjoying food together"/>
                </svg>

                <h2>Recipes</h2>
                <p>Here you can have access to recipes from all over the world. We have a database with numerous recipes from more than 80 countries for your taste.</p>
                <p><a class="btn btn-secondary" href="/recipes">View Recipes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#FFC055"/>
                    <img src="{{asset('/img/SVG/undraw_Eating_together_teal.svg')}}" width="140" height="140" alt="Two people enjoying food together"/>
                </svg>

                <h2>Restaurants</h2>
                <p>Looking to find your new favourite restaurant? You've come to the right place! We have a database with different cuisines from around the globe.</p>
                <p><a class="btn btn-secondary" href="/restaurants">View Restaurants &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#FFC055"/>
                    <img src="{{asset('/img/SVG/undraw_online_groceries_teal.svg')}}" width="140" height="140" alt="Two people enjoying food together"/>
                </svg>

                <h2>Your Menus</h2>
                <p>Turn it into a unique experience for your taste buds. Sign up now to receive tailor-made recommendations based on your taste and preferences.</p>
                <p><a class="btn btn-secondary" href="#">Sign Up &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

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
