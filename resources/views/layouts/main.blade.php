<?php
$links = config('menueas');
$nav_menues = config('menueas.shop_Areas');
$logo_links = config('logos');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href=".\img\favicon.ico">
    <title>Dc shop | @yield('titlePage')</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.navbar')




    @yield('content')

    @include('partials.footer')

</body>

</html>
