@php
$main_menu = config('main_menu');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <!-- Header -->
        @include('includes.header')
        <!-- Main -->
        <main>
            <!-- Jumbotron -->
            <section class="jumbotron"></section>
            @yield('main-content')
        </main>
        <!-- Footer -->
        @include('includes.footer')
    </body>
</html>