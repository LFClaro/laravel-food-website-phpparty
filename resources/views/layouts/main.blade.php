<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHParty - @yield('title')</title>
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
@section('header')
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
                    <a href="/home"><img src="{{asset('/img/Logo_transparent.png')}}" alt="PHP Party" height="50"></a>
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                        <i class="fa fa-bars"></i></button>
                    @include('inc.nav')
            </div>
        </nav>
    </header>
    @show
<main>
    <div>
        @yield('content')
    </div>
</main>
@section('footer')
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="www.instagram.com"><i class="icon ion-social-instagram"></i></a>
                <a href="www.snapchat.com"><i class="icon ion-social-snapchat"></i></a>
                <a href="www.twitter.com"><i class="icon ion-social-twitter"></i></a>
                <a href="www.facebook.com"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/home">Home</a></li>
                <li class="list-inline-item"><a href="/sitemap">Sitemap</a></li>
                <li class="list-inline-item"><a href="/about">About</a></li>
                <li class="list-inline-item"><a href="/contact">Contact</a></li>
                <li class="list-inline-item"><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/faq" class="list-inline-item">FAQ's</a></li>
            </ul>
            <p class="copyright">Humber College &copy; 2021</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    @show
</body>
</html>
