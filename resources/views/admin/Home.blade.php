{{--<link rel="stylesheet" href="/css/admin.css">--}}
@extends('admin.master')

@section('title')
    Admin Home
@endsection
@section('content')


    <div class="content-menu">
        <div class="name-content">Home</div>
        <div class="information-content">
            <div class="container-content">
                <i class="far fa-clipboard" id="blue"></i>
                <div class="information">
                    <div class="number">{{count($product)}}</div>
                    <div class="name">Products</div>
                </div>
            </div>
            <div class="container-content">
                <i class="fas fa-users" id="green"></i>
                <div class="information">
                    <div class="number">{{count($user)}}</div>
                    <div class="name">Users</div>
                </div>
            </div>
            <div class="container-content">
                <i class="far fa-check-square" id="purple"></i>
                <div class="information">
                    <div class="number">{{count($orders)}}</div>
                    <div class="name">New Orders</div>
                </div>
            </div>
        </div>
    </div>


@endsection
