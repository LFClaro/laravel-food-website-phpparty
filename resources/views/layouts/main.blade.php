<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHParty - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/index.js') }}"></script>
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
@include('inc.header')
<main>
    <div>
        @yield('content')
    </div>
</main>
@include('inc.footer')
</body>
</html>
