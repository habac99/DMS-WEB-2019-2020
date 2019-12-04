


@extends('master')
@section('title')
    {{strtoupper($type_name)}}
@endsection
{{--<link rel="stylesheet" href="/css/bootstrap.min.css">--}}
@section('content')
    <div class="product-header">
        <div class="header-text">
            {{strtoupper($type_name)}}
        </div>
    </div>
    <div class="product-section">

        <div class="product">
            @foreach($product_list2 as $pr_list)

            <div class="img-bestseller-product">
                <div class="image-block">
                    <a href="#"><img src="{{asset($pr_list->image1)}}" alt="" class="layer1"></a>
                    <div class="white"></div>
                    <div class="size-section">
                        <div class="size">AVAILABLE SIZE</div>
                        <div class="size-number">XS S M L XL XXL</div>
                    </div>
                    <div class="btn-shop-now">
                        <a href="{{route('one_product',[$pr_list->product_name,$pr_list->color])}}">SHOP NOW</a>
                    </div>

                </div>
                <div class="title-img" style="text-transform: uppercase">
                    <a href="#">{{$pr_list->product_name}}</a>
                    <div class="cost">
                        <p>${{$pr_list->unit_price}}</p>
                    </div>
                </div>
                <div class="information">{{ucfirst($pr_list->color)}}</div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
