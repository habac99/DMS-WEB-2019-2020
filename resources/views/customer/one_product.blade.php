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
    <title>{{$name}}</title>
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
                            <a href="denim.html">
                                <p>DENIM</p>
                                <img src="/img/denim-menu.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="cargos.html">
                                <p>CARGOS</p>
                                <img src="/img/cargo-menu.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="shorts.html">
                                <p>SHORTS</p>
                                <img src="/img/short-menu.png" alt="">
                            </a>

                        </li>
                        <li>
                            <a href="outerwear.html">
                                <p>OUTERWEAR</p>
                                <img src="/img/outerwear-menu.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="top.html">
                                <p>TOP</p>
                                <img src="/img/top-menu.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <a href="#">About</a> -->
        </div>
        <div class="logo-middle">
            <a href={{route('Homepage')}} class="logo">s l m p l e</a>
        </div>
        <div class="right-menu">
            <div><a href="/dangnhap.html">My Account</a></div>
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



<div class="show-container">
    <div class="show-section">
        <div class="img-button">
            <div class="row-button">
                <img src={{$details[0]->image1}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{$details[0]->image2}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{$details[0]->image3}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{$details[0]->image4}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{$details[0]->image5}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
        </div>
        <div class="img-content">
            <!-- <span onclick="this.parentElement.style.display='none'">&times;</span> -->
            <img id="expandedImg" style="width:100%" src={{$details[0]->image1}}>
        </div>
        <div class="img-infor">
            <div class="_header">{{$name}}</div>
            <div class="_color">Olive</div>
            <div class="_cost">50 $</div>
            <div class="_color-link"></div>
            <div class="select-size">
                <div class="custom-input x">
                    <input type="radio" id="XS" name="size" value="">
                    <label for="XS" class="two-size">XS</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input x">
                    <input type="radio" id="S" name="size" value="">
                    <label for="S" class="s-size">S</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input x">
                    <input type="radio" id="M" name="size" value="">
                    <label for="M" class="m-size">M</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input x">
                    <input type="radio" id="L" name="size" value="">
                    <label for="L" class="l-size">L</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input xl">
                    <input type="radio" id="XL" name="size" value="">
                    <label for="XL" class="two-size">XL</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input xxl">
                    <input type="radio" id="XXL" name="size" value="">
                    <label for="XXL" class="three-size">XXL</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input xxxl">
                    <input type="radio" id="XXXL" name="size" value="">
                    <label for="XXXL" class="four-size">XXXL</label>
                    <div class="check"></div>
                </div>
            </div>
            <button type="button">ADD TO BAG</button>
            <div class="information">
                <p class="des">
                    the Cargo Drawcord Shorts are designed with a relaxed fit throughout, cargo pockets at the side seam and front, which extend past the length of the shorts, a stretch waistband, and is finished with a yellow elastic drawcord with metal aglets.
                </p>
                <div class="detail">
                    <p>detail</p>
                    <ul>
                        <li>relaxed fit</li>
                        <li>100% cotton</li>
                        <li>model is 6’1, 140 lbs and wears a size medium</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>




<div class="service-section">
    <div class="service-header">
        <h4></h4>
    </div>
    <div class="service-content">
        <div class="service">
            <i class="fas fa-paper-plane"></i>
            <p>FREE SHIPPING ON ALL ORDERS OVER $100 USD</p>
        </div>
        <div class="service">
            <i class="fas fa-dollar-sign"></i>
            <p>FREE RETURNS</p>
        </div>
        <div class="service">
            <i class="fas fa-shield-alt"></i>
            <p>SECURE CHECKOUT</p>
        </div>
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
