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
                    <p>Product name</p>
                    <input type="text" name="pr_name">
                </div>
                <div class="form-category">
                    @foreach($type as $pr_type)
                    <div>
                        <input type="radio" name="category" value="{{$pr_type->type_name}}">
                        <p>{{$pr_type->type_name}}</p>
                    </div>
                        @endforeach

                </div>
                <div class="form-group">
                    <p>Price</p>
                    <input type="number" name="price">
                </div>

                <div class="form-group">
                    <p>Product images( maximum 5 images )</p>
                    <input type="file" id="file-input" name="img[]" multiple>
                    <div id="preview"></div>
                </div>
                <div class="form-group">
                    <p>Product color</p>
                    <input type="text" name="color">
                </div>
                <div class="form-group">
                    <p>Size</p>
                    <input type="text">
                </div>
                <div class="form-group">
                    <p>Description</p>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                @if(Session::has('error'))
                    <p class="alert alert-danger">{{Session::get('error')}}</p>
                    @elseif(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                @endif
                <div class="form-group" id="last">
                    <input type="submit" value="Add" class="btn-submit-add">
                    <a href={{route('adminProduct')}}>Cancel</a>
                </div>

                {{csrf_field()}}
            </form>

        </div>
    </div>
    @endsection



