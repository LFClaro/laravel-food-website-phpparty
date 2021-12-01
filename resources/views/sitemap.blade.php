<?php ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPParty - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
<h1>PHParty Site Map</h1>
<ul>
    <li><a href="/home" class="nav-link text-uppercase font-weight-bold">Home</a></li>
    <li><a href="/recipes" class="nav-link text-uppercase font-weight-bold">Recipes</a> </li>
    <li><a href="/recipereview" class="nav-link text-uppercase font-weight-bold">Recipe Reviews</a></li>
    <li><a href="/restaurants" class="nav-link text-uppercase font-weight-bold">Restaurants</a></li>
    <li><a href="/review" class="nav-link text-uppercase font-weight-bold">Restaurant Reviews</a></li>
    <li><a href="/pages/contact.php" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
    <li><a href="/pages/contact.php" class="nav-link text-uppercase font-weight-bold">Recipe Reviews</a></li>
    <li><a href="/pages/about.php" class="nav-link text-uppercase font-weight-bold">About</a></li>
</ul>
</div>
</body>
</html>
