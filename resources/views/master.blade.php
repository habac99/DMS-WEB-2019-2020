<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/show.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/dangky.css">


    <title>
        @section('title')

        @show
    </title>

</head>
<body>

    @include('header')
    <div class="container">
        @yield('content')
    </div>
    @include('footer')
    <script src="/js/main.js"></script>
</body>
</html>

