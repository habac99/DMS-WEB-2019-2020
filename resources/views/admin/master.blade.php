<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/editadmin.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/productadmin.css">
    <link rel="stylesheet" href="/css/addproductadmin.css">

    <title>
        @section('title')

        @show
    </title>
</head>

<body>
    <div class="main-header">
        <a href="#" class="admin-name">ADMIN</a>
        <div class="menu-layer1">
            <a href={{route('logout')}} class="dropdown-menu">LOG OUT</a>

        </div>
    </div>
    <div class="container">
        <div class="left-menu" id="left-menu-admin">
            <ul>
                <li id="indexadmin">
                    <a href={{route('adminHome')}}>
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li id="productadmin">
                    <a href={{route('adminProduct')}}>
                        <i class="far fa-calendar-alt"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li id="orderadmin">
                    <a href={{route('getOrder')}}>
                        <i class="far fa-calendar-check"></i>
                        <p>Orders</p>
                    </a>
                </li>
            </ul>
        </div>
        @yield('content')
    </div>

{{--        @yield('content')--}}

    <script src="/js/mainAdmin.js"></script>
    <script src="/js/admin.js"></script>
</body>
</html>

