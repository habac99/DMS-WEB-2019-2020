@extends('admin.master')
@section('title')
    Edit product
    @endsection
@section('content')
<div class="content-menu">
    <div class="name-content">Sản phẩm</div>
    <div class="panel-heading">
        <div class="name-panel">Sửa sản phẩm</div>
        <form action="">
            <div class="form-group">
                <p>Tên sản phẩm</p>
                <input placeholder="{{$product_edit[0]->product_id}}" type="text">
            </div>
            <div class="form-group">
                <p>Giá sản phẩm</p>
                <input type="number">
            </div>

            <div class="form-group">
                <p>Ảnh sản phẩm</p>
                <input type="file" id="file-input" name="file[]" multiple>
                <div id="preview">
                    <img src="{{asset($product_edit[0]->image1)}}" alt="">
                    <img src="{{asset($product_edit[0]->image2)}} " alt="">
                    <img src="{{asset($product_edit[0]->image3)}} " alt="">
                    <img src="{{asset($product_edit[0]->image4)}}" alt="">
                    <img src="{{asset($product_edit[0]->image5)}} " alt="">
                </div>
            </div>
            <div class="form-group">
                <p>Màu sản phẩm</p>
                <input type="text">
            </div>
            <div class="form-group">
                <p>Size sản phẩm</p>
                <input type="text">
            </div>
            <div class="form-group">
                <p>Miêu tả</p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group" id="last">
                <input type="submit" value="Sửa">
                <a href={{route('adminProduct')}}>Hủy bỏ</a>
            </div>
        </form>
    </div>
</div>
    @endsection
