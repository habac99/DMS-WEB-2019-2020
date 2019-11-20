


@extends('master')
@section('title')
    {{strtoupper($type_name)}}
@endsection
<link rel="stylesheet" href="/css/bootstrap.min.css">
@section('content')
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
                    <a href="#"><img src="{{asset($pr_list->image)}}" alt="" class="layer1"></a>
                    <div class="white"></div>
                    <div class="size-section">
                        <div class="size">AVAILABLE SIZE</div>
                        <div class="size-number">28 29 30 31 32 33 34 35
                            <br>
                            36 37 38 39 40</div>
                    </div>
                    <div class="btn-shop-now">
                        <a href="{{route('one_product',[$pr_list->product_name,'black'])}}">SHOP NOW</a>
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
@endsection
