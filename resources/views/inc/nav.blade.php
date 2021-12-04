@section('nav')
    <div id="navbarSupportedContent" class="collapse navbar-collapse align-content-center">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/home" class="nav-link text-uppercase font-weight-bold">Home<span
                        class="sr-only"></span></a></li>
            <li class="nav-item"><a href="/recipes" class="nav-link text-uppercase font-weight-bold">Recipe</a></li>
            <li class="nav-item"><a href="/restaurants" class="nav-link text-uppercase font-weight-bold">Restaurant</a>
            </li>
            <li class="nav-item"><a href="/contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
            <li class="nav-item"><a href="/about" class="nav-link text-uppercase font-weight-bold">About</a></li>
            <li class="nav-item"><a href="/sitemap" class="nav-link text-uppercase font-weight-bold">Site Map</a></li>
            <li class="nav-item">
{{--                <input type="search" id="src" name="src">--}}
{{--                <div class="dropdown">--}}
{{--                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
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
{{--the category of search item--}}
                    <select name="src_category">
                        <option value="restaurant">Restaurant</option>
                        <option value="recipes">Recipe</option>
                        <option value="countries">Country</option>
                    </select>
                    <input type="submit" style="background: {{asset('/img/search_icon.png')}}" width="22" height="23">
                    <a href="/pages/search.php"><img src="{{asset('/img/search_icon.png')}}" width="22" height="23"></a>
                </form>
            </li>

            <li class="nav-item"><a href="/login" class="btn btn-secondary nav-link  ms-2 btn-sm">Log In</a></li>
        </ul>
    </div>
@show
