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


{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <title>
        @section('title')

        @show
    </title>
{{--    <link rel="stylesheet" href="/css/dangnhap.css">--}}
{{--    <title>{{$name}}</title>--}}
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

