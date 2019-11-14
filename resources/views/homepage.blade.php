@extends('master')
@section('title')
     Home
    @endsection
@section('content')

<div class="first-banner">
    <div class="main-banner-content">
        <p class="above-heading">JUST RELEASED</p>
        <h2 class="heading-text">LOOKBOOK 2077</h2>
        <a href="/show/lookbook.html" class="text-btn">SHOP NOW</a>
    </div>
</div>

<div class="product-section">
    <div class="new-product-header">
        <h4>WHATS NEW</h4>
    </div>
    <div class="new-product">
        @foreach($new_product as $new_pr)
        <div class="img-new-product">
            <a href={{route('one_product',$new_pr->product_name)}}><img src={{$new_pr->image}} alt=""></a>
            <p>NEW RELEASE</p>
            <div class="title-img">
                <a href={{route('one_product',$new_pr->product_name)}}>{{$new_pr->product_name}}</a>
            </div>
            <a href={{route('one_product',$new_pr->product_name)}} class="new-product-btn">SHOP NOW</a>
        </div>
            @endforeach
    </div>
</div>

<div class="bestseller-section">
    <div class="bestseller-header">
        <h4>BEST SELLER</h4>
    </div>
    <div class="bestseller-product">
        <div class="img-bestseller-product">
            <div class="image-block">
                <a href="/vendors/oneproduct/midenim.html"><img src="/img/bestseller1-1.jpg" alt="" class="layer1"></a>
                <div class="white"></div>
                <div class="size-section">
                    <div class="size">AVAILABLE SIZE</div>
                    <div class="size-number">28 29 30 31 32 33 34 35 36 37 38 39 40</div>
                </div>
                <div class="btn-shop-now">
                    <a href="/vendors/oneproduct/midenim.html">SHOP NOW</a>
                </div>
            </div>
            <div class="title-img">
                <a href="/vendors/oneproduct/midenim.html">M1 DENIM</a>
                <div class="cost">
                    <p>50 $</p>
                </div>
            </div>
            <div class="information">BLUE</div>
        </div>
        <div class="img-bestseller-product">
            <div class="image-block">
                <a href="/vendors/oneproduct/cargoshorts.html"><img src="/img/bestseller2-1.jpg" alt="" class="layer1"></a>
                <div class="white"></div>
                <div class="size-section">
                    <div class="size">AVAILABLE SIZE</div>
                    <div class="size-number">XS S M L XL XXL XXXL</div>
                </div>
                <div class="btn-shop-now">
                    <a href="/vendors/oneproduct/cargoshorts.html">SHOP NOW</a>
                </div>
            </div>
            <div class="title-img">
                <a href="/vendors/oneproduct/cargoshorts.html">DRAWCORD SHORTS</a>
                <div class="cost">
                    <p>50 $</p>
                </div>
            </div>
            <div class="information">OLIVE</div>
        </div>
        <div class="img-bestseller-product">
            <div class="image-block">
                <a href="vendors/oneproduct/miidenim.html"><img src="/img/bestseller3-1.jpg" alt="" class="layer1"></a>
                <div class="white"></div>
                <div class="size-section">
                    <div class="size">AVAILABLE SIZE</div>
                    <div class="size-number">28 29 30 31 32 33 34 35 36 37 38 39 40</div>
                </div>
                <div class="btn-shop-now">
                    <a href="vendors/oneproduct/miidenim.html">SHOP NOW</a>
                </div>
            </div>
            <div class="title-img">
                <a href="vendors/oneproduct/miidenim.html">M1 DENIM</a>
                <div class="cost">
                    <p>50 $</p>
                </div>
            </div>
            <div class="information">BLACK</div>
        </div>
        <div class="img-bestseller-product">
            <div class="image-block">
                <a href="vendors/oneproduct/1snappantblack.html"><img src="/img/bestseller4-1.jpg" alt="" class="layer1"></a>
                <div class="white"></div>
                <div class="size-section">
                    <div class="size">AVAILABLE SIZE</div>
                    <div class="size-number">XS S M L XXL</div>
                </div>
                <div class="btn-shop-now">
                    <a href="vendors/oneproduct/snappants.html">SHOP NOW</a>
                </div>
            </div>
            <div class="title-img">
                <a href="vendors/oneproduct/snappants.html">SNAP PANT</a>
                <div class="cost">
                    <p>50 $</p>
                </div>
            </div>
            <div class="information">BLACK</div>
        </div>
    </div>
</div>
<div class="quote-section">
    <blockquote>
        DON'T BE INTO TRENDS.
        <br>
        DON'T MAKE FASHION OWN YOU, BUT YOU DECIDE WHAT YOU ARE.
        <cite>
            - GIANNI VERSACE
        </cite>
    </blockquote>
</div>

<div class="second-banner">
    <div class="left-banner">
        <h2>DENIM</h2>
        <a href={{route('product_type','denim')}} class="text-btn2">SHOP NOW</a>
    </div>
    <div class="right-banner">
        <h2>BOTTOM</h2>
        <a href={{route('product_type','bottom')}} class="text-btn2">SHOP NOW</a>
    </div>
</div>
<div class="feedback-section">
    <div class="feedback-header">
        <h2>INSTAGRAM LOOK</h2>
    </div>
    <div class="instagram-section">
        <div class="instagram-img">
            <a href="#"><img src="/img/i1.jpg" alt="" class="layer1"></a>
            <div class="white"></div>
            <div class="logo-instagram">
                <a href="https://www.instagram.com/p/BxA8ZT6Jo02/"><i class="fab fa-instagram"></i></a>
                <div class="title">SEE THIS LOOK</div>
            </div>
        </div>
        <div class="instagram-img">
            <a href="#"><img src="/img/i2.jpg" alt="" class="layer1"></a>
            <div class="white"></div>
            <div class="logo-instagram">
                <a href="https://www.instagram.com/p/B3pQ_vwDgvY/"><i class="fab fa-instagram"></i></a>
                <div class="title">SEE THIS LOOK</div>
            </div>
        </div>
        <div class="instagram-img">
            <a href="#"><img src="/img/i3.jpg" alt="" class="layer1"></a>
            <div class="white"></div>
            <div class="logo-instagram">
                <a href="https://www.instagram.com/p/B3mjXOFglXr/"><i class="fab fa-instagram"></i></a>
                <div class="title">SEE THIS LOOK</div>
            </div>
        </div>
        <div class="instagram-img">
            <a href="#"><img src="/img/i4.jpg" alt="" class="layer1"></a>
            <div class="white"></div>
            <div class="logo-instagram">
                <a href="https://www.instagram.com/p/B30AkczpX8P/"><i class="fab fa-instagram"></i></a>
                <div class="title">SEE THIS LOOK</div>
            </div>
        </div>
        <div class="instagram-img">
            <a href="#"><img src="/img/i5.jpg" alt="" class="layer1"></a>
            <div class="white"></div>
            <div class="logo-instagram">
                <a href="https://www.instagram.com/p/B3zZk3-A35m/"><i class="fab fa-instagram"></i></a>
                <div class="title">SEE THIS LOOK</div>
            </div>
        </div>
    </div>
</div>




@endsection
