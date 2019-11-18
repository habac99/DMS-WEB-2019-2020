@extends('admin.master')
@section('title')
    Products
@endsection
@section('content')
    <div class="content-menu">
        <div class="name-content">Sản phẩm</div>
        <div class="panel-heading">
            <div class="name-panel">Danh sách sản phẩm</div>
            <div class="panel-body">
                <a href={{route('addProduct')}} class="add-btn">Thêm sản phẩm</a>
                <table class="main-table">
                    <thead>
                    <tr class="name-category">
                        <th class="id">ID</th>
                        <th class="name-product">Tên sản phẩm</th>
                        <th class="price-product">Giá sản phẩm</th>
                        <th class="img-product">Ảnh sản phẩm</th>
                        <th class="color-product">Màu</th>
                        <th class="size-product">Size</th>
                        <th class="option-product">Tùy chọn</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M1 Denim</td>
                        <td>50$</td>
                        <td class="img-list">
                            <img src="/img/allproduct/denim/m1-denim-black-1.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-2.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-3.jpg" alt="">
                            <img src="/img/allproduct/denim/m1-denim-black-4.jpg" alt="">
{{--                            <img src="/img/allproduct/denim/m1-denim-black-5.jpg" alt="">--}}
                        </td>
                        <td>Black</td>
                        <td>XS, S, M, L, XL, XXL, XXXL</td>
                        <td class="btn-list">
                            <a href="#" class="change-btn modify">Sửa</a>
                            <a href="#" class="change-btn delete">Xóa</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

