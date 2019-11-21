@extends('admin.master')

@section('title')
    Orders
@endsection
@section('content')
    <div class="content-menu">
        <div class="name-content">Orders</div>
        <div class="panel-heading">
            <div class="name-panel">Order List</div>
            <div class="panel-body">
{{--                <a href={{route('addProduct')}} class="add-btn">Add Product</a>--}}
                <table class="main-table">
                    <thead>
                    <tr class="name-category">
                        <th class="id">ID</th>
                        <th class="name-product">Ship To</th>
                        <th class="name-product">Email</th>
                        <th class="name-product">Product List</th>
                        <th class="name_price">Total</th>

{{--                        <th class="color-product">Color</th>--}}
{{--                        <th class="size-product">More info</th>--}}
                        <th class="option-product">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order2 as $order)
                        <tr>
                            <td class="id">{{$order->bill_id}}</td>
                            <td>{{$order->shipTo}}</td>
                            <td>{{$order->email}}</td>
                            <td class="img-list">
                                {{$order->product_list}}
                            </td>
                            <td>{{$order->total_payment}}</td>
{{--                            <td>XS, S, M, L, XL, XXL, XXXL</td>--}}
                            <td class="btn-list">
                                <a href="" class="change-btn modify">Edit</a>
                                <a href="#" class="change-btn delete">Remove</a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

