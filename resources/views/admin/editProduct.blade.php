@extends('admin.master')
@section('title')
    Edit product
    @endsection
@section('content')
<div class="content-menu">
    <div class="name-content">Sản phẩm</div>
    <div class="panel-heading">
        <div class="name-panel">Sửa sản phẩm</div>
        <form method="post">
            {{csrf_field()}}
            <div class="form-group">
                <p>Product name</p>
                <input name="pr_name" value="{{$product_edit[0]->product_name}}" type="text">
            </div>
            <div class="form-group">
                <p>Price</p>
                <input type="number" name="price" value="{{$product_edit[0]->unit_price}}">
            </div>

{{--            <div class="form-group">--}}
{{--                <p>Product images</p>--}}
{{--                <input type="file" id="file-input" name="img[]" multiple>--}}
{{--                <div id="preview">--}}
{{--                    <img src="{{asset($product_edit[0]->image1)}}" alt="">--}}
{{--                    <img src="{{asset($product_edit[0]->image2)}} " alt="">--}}
{{--                    <img src="{{asset($product_edit[0]->image3)}} " alt="">--}}
{{--                    <img src="{{asset($product_edit[0]->image4)}}" alt="">--}}
{{--                    <img src="{{asset($product_edit[0]->image5)}} " alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
                <p>Product color</p>
                <input type="text" name="color" value="{{$product_edit[0]->color}}">
            </div>
            <div class="form-group">
                <p>In Stock</p>
                <input name="size" type="text">
            </div>
            <div class="form-group">
                <p>Description</p>
                <textarea name="description" placeholder="{{$product_edit[0]->description}}" id="" cols="30" rows="10" ></textarea>
            </div>
            <div class="form-group" id="last">
                <button type="submit" value="Sửa">Update</button>
                <a href={{route('adminProduct')}}>Cancel</a>
            </div>
        </form>
    </div>
</div>
    @endsection
