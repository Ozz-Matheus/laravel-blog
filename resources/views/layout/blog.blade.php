<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta-description', 'Esta es la descripción por defecto del blog')">
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
        /* Blog */
        .blog .item  .featured_image{
            width: 50%;
            height: 250px;
        }
        .featured_image img{
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .blog .item a{
            color: black;
            text-decoration: none;
        }
        .blog .item{
            border-bottom: 1px solid black;
            padding: 50px 0;
        }
        /* Blog */
        .blog-item .featured_image{
            height: 600px;
        }
        .blog-item .body .embedded_image img{
            max-width: 50%;
        }
        .flex{
            display: flex;
        }
        .mr-5{
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            @include('partials.navBlog')
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>