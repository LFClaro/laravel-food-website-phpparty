@extends('layouts.main')

@section(('header'))
    @parent
@endsection
@section('content')



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <h1 class="featurette-heading text-light">PHParty Site Map</h1>

                <p><a href="/home" class="nav-link text-uppercase font-weight-bold text-light">Home</a></p>
                <p><a href="/recipes" class="nav-link text-uppercase font-weight-bold text-light">Recipes</a> </p>
                <p><a href="/recipereview" class="nav-link text-uppercase font-weight-bold text-light">Recipe Reviews</a></p>
                <p><a href="/restaurants" class="nav-link text-uppercase font-weight-bold text-light">Restaurants</a></p>
                <p><a href="/review" class="nav-link text-uppercase font-weight-bold text-light">Restaurant Reviews</a></p>
                <p><a href="/pages/contact.php" class="nav-link text-uppercase font-weight-bold text-light">Contact</a></p>
                <p><a href="/pages/contact.php" class="nav-link text-uppercase font-weight-bold text-light">Recipe Reviews</a></p>
                <p><a href="/pages/about.php" class="nav-link text-uppercase font-weight-bold text-light">About</a></p>
        </div>

@endsection
@section('footer')
    @parent
@endsection
