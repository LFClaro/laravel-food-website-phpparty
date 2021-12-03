@extends('layouts.main')

@section(('header'))
    @parent
@endsection
@section('content')



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
            <h1 class="featurette-heading text-light text-center">Our Promise to Privacy</h1>
        <h1 class="featurette-heading text-light text-center">Intro </h1>
        <p class=""></p>

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
    </div>

@endsection
@section('footer')
    @parent
@endsection
