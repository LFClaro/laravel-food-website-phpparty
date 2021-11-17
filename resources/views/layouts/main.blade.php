<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
</body>
</html>
