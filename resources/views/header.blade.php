
<div class="header-menu" id="nav-menu">
    <div class="main-menu">
        <div class="left-menu">
            <div class="menu-layer1">
                <button id="tle" class="dropbtn">Shop</button>
                <div class="menu-layer2" id="drop-down">
                    <ul>
                        <li>
                            <a href={{route('allproduct')}}>
                                <p>ALL PRODUCT</p>
                            </a>
                        </li>
                        @foreach($product_type as $pr_type)
                            <li>
                                <a href={{route('product_type',$pr_type->type_name)}}>
                                    <p>{{$pr_type->type_name}}</p>
                                    <img src={{$pr_type->image}} alt="">
                                </a>
                            </li>
                        @endforeach
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
