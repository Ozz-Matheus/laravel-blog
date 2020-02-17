<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page | {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta-description', 'Esta es la descripción por defecto para las paginas')">
    <style type="text/css">
        body{
            margin:0;
        }
        header nav ul{
            display: flex;
            list-style-type:none;
            padding: 0;
        }
        header nav a{
            color: grey;
            font-weight: bold;
            font-size: 30px;
            line-height: 23px;
            letter-spacing: 0.1em;
            text-decoration: none;
            margin: 0 15px;
        }
        .container{
            width: 80%;
            margin: auto;
            padding-top: 50px;
        }
        .container .featured_image img{
            max-width: 50%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            @include('partials.navPage')
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>