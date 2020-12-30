<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Mon CV') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/page_Accueil_Haut.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page_Accueil_Bas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--intro css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.0/introjs.min.css" />

    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!--police-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Poppins:wght@700&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Permanent+Marker&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">
</head>

<body>
    @yield('content')
    <!-- Scripts -->
    <!-- navbar app lodash -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/typed.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- intro -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.0/intro.min.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>