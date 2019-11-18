@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="content-menu">
        <div class="name-content">Sản phẩm</div>
        <div class="panel-heading">
            <div class="name-panel">Thêm sản phẩm</div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <p>Tên sản phẩm</p>
                    <input type="text" name="pr_name">
                </div>
                <div class="form-group">
                    <p>Giá sản phẩm</p>
                    <input type="number" name="price">
                </div>

                <div class="form-group">
                    <p>Ảnh sản phẩm</p>
                    <input type="file" id="file-input" name="img[]" multiple>
                    <div id="preview"></div>
                </div>
                <div class="form-group">
                    <p>Màu sản phẩm</p>
                    <input type="text" name="color">
                </div>
                <div class="form-group">
                    <p>Size sản phẩm</p>
                    <input type="text">
                </div>
                <div class="form-group">
                    <p>Miêu tả</p>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group" id="last">
                    <input type="submit" value="Thêm">
                    <a href="./productmain.html">Hủy bỏ</a>
                </div>
                {{csrf_field()}}
            </form>

        </div>
    </div>
    @endsection



