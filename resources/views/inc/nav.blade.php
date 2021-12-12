@section('nav')
    <div id="navbarSupportedContent" class="collapse navbar-collapse align-content-center">
        <ul class="navbar-nav ml-auto text-uppercase font-weight-bold">
            <li class="nav-item active"><a href="/home" class="nav-link">Home<span
                        class="sr-only"></span></a></li>
            <li class="nav-item"><a href="/recipes" class="nav-link">Recipe</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Restaurant
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/restaurants/map">Show Map</a>
                    <a class="dropdown-item" href="/restaurants">List All</a>
                </div>
            </li>
            <li class="nav-item"><a href="/contact/create" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/sitemap" class="nav-link">Site Map</a></li>
            <li class="nav-item">
{{--                <input type="search" id="src" name="src" class="nav-item"/>--}}
{{--                <div class="dropdown nav-item">--}}
{{--                    <button class="btn btn-secondary dropdown-toggle nav-item" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Category--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                        <a class="dropdown-item" href="../searchResult_restaurant.blade.php">Restaurant</a>--}}
{{--                        <a class="dropdown-item" href="../searchResult_recipe.blade.php">Recipe</a>--}}
{{--                        <a class="dropdown-item" href=../searchResult_country.blade.php>Country</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <form action="{{url('/search')}}" method="get">
                    <input type="search" id="src" name="src">
<!--the category of search item -->
                    <select name="src_category">
                        <option value="restaurant">Restaurant</option>
                        <option value="recipes">Recipe</option>
                        <option value="countries">Country</option>
                    </select>
                    <input type="image" src="{{asset('/img/search_icon.png')}}" width="22" height="23">
                </form>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item"><p class="text-light">Hello, {{Auth::user()->first_name}}</p></li>
                    <li class="nav-item"><a href="{{Auth::logout() }}" class="btn btn-secondary nav-link  ms-2 btn-sm">Log Out</a></li>
                @endauth
            @else
                <li class="nav-item"><a href="/login" class="btn btn-secondary nav-link  ms-2 btn-sm">Log In</a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-secondary nav-link  ms-2 btn-sm">Register</a></li>
                @endif
            @endif
        </ul>
    </div>
@show
