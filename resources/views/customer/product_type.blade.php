<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/product.css">
    <title> {{strtoupper($type_name)}}</title>
</head>

<body>
    <div class="header-menu" id="nav-menu">
        <div class="main-menu">
            <div class="left-menu">
                <div class="menu-layer1">
                    <button id="tle" class="dropbtn">Shop</button>
                    <div class="menu-layer2" id="drop-down">
                        <ul>
                            <li>
                                <a href="/product.html">
                                    <p>ALL PRODUCT</p>
                                </a>
                            </li>
                            <li>
                                <a href="/vendors/oneproduct/denim.html">
                                    <p>DENIM</p>
                                    <img src="/img/denim-menu.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="/vendors/oneproduct/cargos.html">
                                    <p>CARGOS</p>
                                    <img src="/img/cargo-menu.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="/vendors/oneproduct/shorts.html">
                                    <p>SHORTS</p>
                                    <img src="/img/short-menu.png" alt="">
                                </a>

                            </li>
                            <li>
                                <a href="/vendors/oneproduct/outerwear.html">
                                    <p>OUTERWEAR</p>
                                    <img src="/img/outerwear-menu.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="/vendors/oneproduct/top.html">
                                    <p>TOP</p>
                                    <img src="/img/top-menu.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <a>About</a> -->
            </div>
            <div class="logo-middle">
                <a href="/index.html" class="logo">s l m p l e</a>
            </div>
            <div class="right-menu">
                <div>My Account</div>
                <div class="fas fa-shopping-cart cart"></div>
            </div>
        </div>
        <div class="side-cart">
            <div class="black-screen"></div>
            <div class="content-cart">
                <div class="content">
                    <p>BAG</p>
                    <p class="close">CLOSE</p>
                </div>
                <div class="main-content">
                    <p>
Looks like your bag is empty.
                        <br>
Let's add a thing or two.
                    </p>
                </div>
                <div class="check-out">
                    <div class="content-check-out">
                        <div class="sumtotal-money">
                            <p>SUMTOTAL(0 item)</p>
                            <p class="money">0$</p>
                        </div>
                        <a href="#">CHECK OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="product-header">
        <div class="header-text">
            {{strtoupper($type_name)}}
        </div>
    </div>
    <div class="product-section">

        <div class="product">
            @foreach($product_list as $pr_list)

            <div class="img-bestseller-product">
                <div class="image-block">
                    <a href="#"><img src={{$pr_list->description}} alt="" class="layer1"></a>
                    <div class="white"></div>
                    <div class="size-section">
                        <div class="size">AVAILABLE SIZE</div>
                        <div class="size-number">28 29 30 31 32 33 34 35
                            <br>
                            36 37 38 39 40</div>
                    </div>
                    <div class="btn-shop-now">
                        <a href="{{route('one_product',$pr_list->product_name)}}">SHOP NOW</a>
                    </div>
                </div>
                <div class="title-img">
                    <a href="#">{{$pr_list->product_name}}</a>
                    <div class="cost">
                        <p>{{$pr_list->unit_price}}</p>
                    </div>
                </div>
                <div class="information">BLACK</div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="contac-section">
        <div class="logo-middle1">s l m p l e</div>
        <div class="contact-banner">
            <div class="left-contact">
                <div class="address">
                    <div>
                        <i class="fas fa-map-marker-alt haha"></i>
                        <p>Address: 64 Tran Quoc Vuong, Cau Giay, Ha Noi</p>
                    </div>
                    <div>
                        <i class="fas fa-envelope"></i>
                        <p>Email: contactme@gmail.com</p>
                    </div>
                    <div>
                        <i class="fas fa-phone"></i>
                        <p>Phone: (+84)017-2710-0199</p>
                    </div>
                </div>
            </div>
            <div class="middle-contact">
                <div class="grid">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-google-plus-square"></i>
                </div>
            </div>
            <div class="right-contact">
                <div class="text">BE FIRST TO KNOW ABOUT RELEASES AND RESTOCKS
                </div>
                <div class="input-section">
                    <input type="email" class="email" placeholder="Email Address">
                    <button class="btn-submit" type="submit" name="subcribe">
                        SEND
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/main.js"></script>
</body>

</html>
