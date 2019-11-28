@extends('admin.master')
<link rel="stylesheet" href="/css/order.css">
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
                <table class="main-table orderadmin">
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
                    @foreach($orders as $order)
                        <tr class="adminorder">
                            <td class="autoIncre"></td>
                            <td class="shipto">{{$order->shipTo}}</td>
                            <td class="email">{{$order->email}}</td>
                            <td class="img-list">
                                <table class="table-small .needed">
                                    @foreach($details as $detail)
                                        @if($detail->bill_id == $order->bill_id)
                                    <tr id="tr-small">
                                        <td id="name-product-order">{{strtolower($detail->product_name)}}</td>
                                        <td id="moreinfo-product-order">{{$detail->more_info}}</td>
                                        <td id="soluong">{{$detail->quantity}}</td>
                                    </tr>
                                        @endif
                                        @endforeach

                                </table>
{{--                                {{$order->product_list}}--}}
                            </td>
                            <td class="total-payment">{{$order->total_payment}}</td>

                            <td class="btn-list">
                                <a href="{{route('confirm',$order->bill_id)}}" class="acept-btn">Confirm</a>

                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

