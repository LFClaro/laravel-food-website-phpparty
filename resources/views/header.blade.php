@section('header')
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
@endsection
