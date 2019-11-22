@extends('admin.master')

@section('title')
    Products
@endsection
@section('content')
    <div class="content-menu">
        <div class="name-content">Sản phẩm</div>
        <div class="panel-heading">
            <div class="name-panel">Product list</div>
            <div class="panel-body">
                <a href={{route('addProduct')}} class="add-btn">Add Product</a>
                <div class="margin-div"></div>
                <table class="main-table">
                    <thead>
                    <tr class="name-category">
                        <th class="id">ID</th>
                        <th class="name-product">Product name</th>
                        <th class="price-product">Price</th>
                        <th class="img-product">Images</th>
                        <th class="color-product">Color</th>
                        <th class="size-product">Size</th>
                        <th class="option-product">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product_all as $each_pr)
                    <tr>
                        <td class="autoIncre"></td>
                        <td>{{$each_pr->product_name}}</td>
                        <td>${{$each_pr->unit_price}}</td>
                        <td class="img-list">
                            <img src="{{asset($each_pr->image1)}}" alt="">
                            <img src="{{asset($each_pr->image2)}}" alt="">
                            <img src="{{asset($each_pr->image3)}}" alt="">
                            <img src="{{asset($each_pr->image4)}}" alt="">
{{--                            <img src={{asset($each_pr->image5)}} alt="">--}}
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>{{$each_pr->color}}</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="{{route('editProduct',[$each_pr->product_id,$each_pr->color])}}" class="change-btn modify">Edit</a>
                            <a href="{{route('deleteProduct',[$each_pr->product_id,$each_pr->color])}}" class="change-btn delete">Remove</a>
                        </td>
                    </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

