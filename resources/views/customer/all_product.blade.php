@extends('master')
{{--<link rel="stylesheet" href="/css/bootstrap.min.css">--}}

@section('title')
    All Products
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="product-header">
    <div class="header-text">
        ALL PRODUCT
    </div>
</div>
<div class="product-section">
    <div class="product">
        @foreach($all_products as $each_pr)
        <div class="img-bestseller-product" id="{{$each_pr->product_id}}">
            <div class="image-block">
                <a href={{route('one_product',$each_pr->product_name)}}><img src="{{$each_pr->image}}" alt="" class="layer1"></a>
                <div class="white"></div>
                <div class="size-section">
                    <div class="size">AVAILABLE SIZE</div>
                    <div class="size-number">XS S M L XL XXL XXXL</div>
                </div>
                <div class="btn-shop-now">
                    <a href={{route('one_product',$each_pr->product_name)}}>SHOP NOW</a>
                </div>
            </div>
            <div class="title-img">
                <a style="text-transform: uppercase" href={{route('one_product',$each_pr->product_name)}}>{{$each_pr->product_name}}</a>
                <div class="cost">
                    <p>${{$each_pr->unit_price}}</p>
                </div>
            </div>
{{--            <div class="information">GREEN/BLACK</div>--}}
        </div>
            @endforeach
    </div>
</div>
{{--    {{$all_products->links()}}--}}
@endsection


