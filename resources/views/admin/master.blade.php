<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/productadmin.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
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
        <div class="left-menu">
            <ul>
                <li class="active">
                    <a href={{route('adminHome')}}>
                        <i class="fas fa-home"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <li>
                    <a href={{route('adminProduct')}}>
                        <i class="far fa-calendar-alt"></i>
                        <p>Sản phẩm</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-calendar-check"></i>
                        <p>Đơn hàng</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container2">
        @yield('content')
    </div>
    <script src="/js/mainAdmin.js"></script>
</body>
</html>

