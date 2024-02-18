<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <header>
        @include('templates._partials.navbar')
    </header>

    @yield('content')

    <footer>
        @include('templates._partials.footer')
    </footer>

</html>