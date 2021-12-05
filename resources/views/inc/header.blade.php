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
