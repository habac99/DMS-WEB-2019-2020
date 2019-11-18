@extends('admin.master')
@section('title')
    Admin Home
@endsection
@section('content')
<div>
    <div class="content-menu">
        <div class="name-content">Trang chủ</div>
        <div class="information-content">
            <div class="container-content">
                <i class="far fa-clipboard" id="blue"></i>
                <div class="information">
                    <div class="number">120</div>
                    <div class="name">Sản phẩm</div>
                </div>
            </div>
            <div class="container-content">
                <i class="fas fa-users" id="green"></i>
                <div class="information">
                    <div class="number">120</div>
                    <div class="name">Người dùng</div>
                </div>
            </div>
            <div class="container-content">
                <i class="far fa-check-square" id="purple"></i>
                <div class="information">
                    <div class="number">120</div>
                    <div class="name">Đơn hàng</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
