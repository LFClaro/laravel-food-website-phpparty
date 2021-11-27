@section('content1')
<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/js/bootstrap.bundle.min.js" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <link href="../Styles/carousel.css" rel="stylesheet">
    <!--MAIN CSS -->
    <link href="../Styles/main.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="../Images/favicon.ico">
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
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img src="../Images/Logo_transparent.png" alt="PHP Party" width="100" height="50">
            <a href="index.php" class="navbar-brand text-uppercase font-weight-bold">Recipes</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                <i class="fa fa-bars"></i></button>
        </div>
        @yield('nav')
    </nav>
</header>

