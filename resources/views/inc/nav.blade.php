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

                <form action="" method="get">
                    <input type="search" id="src" name="src">
                    <?php//the category of search item?>
                    <select name="src_category">
                        <option value="restaurant">Restaurant</option>
                        <option value="recipes">Recipe</option>
                        <option value="countries">Country</option>
                    </select>
                    <a href="/pages/search.php"><img src="{{asset('/img/search_icon.png')}}" width="22" height="23"></a>
                </form>
            </li>

            <li class="nav-item"><a href="/login" class="btn btn-secondary nav-link  ms-2 btn-sm">Log In</a></li>
        </ul>
    </div>
@show
