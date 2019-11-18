
@extends('master')
@section('title')
    {{$name}}
@endsection
@section('content')

{{--    <script>--}}
{{--        var xhttp =  new XMLHttpRequest();--}}
{{--        xhttp.open("get","details.json",true);--}}
{{--        xhttp.send();--}}
{{--        var blue = document.getElementById('bluebtn');--}}
{{--        var img1 = document.getElementById('img1');--}}
{{--        var details = JSON.parse(this.responseText);--}}
{{--        //--}}
{{--        function ChangeColor(color) {--}}

{{--            for (var i = 0; i < details.length(); i++) {--}}
{{--                if (details.color === color) {--}}
{{--                    img1.scr = "/img/allproduct/denim/m1-denim-blue-1.jpg";--}}

{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--    </script>--}}
    <div class="show-container">
    <div class="show-section"id = {{$details[0]->product_id}}>
        <div class="img-button" >
            <div class="row-button">
                <img id="img1" src={{asset($details[0]->image1)}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{asset($details[0]->image2)}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{asset($details[0]->image3)}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{asset($details[0]->image4)}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
            <div class="row-button">
                <img src={{asset($details[0]->image5)}} alt="" onclick="myFunction(this);" class="get">
                <div class="white-layer"></div>
            </div>
        </div>
        <div class="img-content">
            <!-- <span onclick="this.parentElement.style.display='none'">&times;</span> -->
            <img id="expandedImg" style="width:100%" src={{asset($details[0]->image1)}}>
        </div>
        <div class="img-infor">
            <div class="_header" id="nameid">{{$name}}</div>
            <div class="_color" id="colorid">{{$details[0]->color}}</div>
            <div class="_cost" id = "priceid">50 $</div>
            <div class="_color-link"></div>
            <div class="select-size">
                <div class="custom-input x">
                    <input type="radio" id="XS" name="size" value="">
                    <label for="XS" class="two-size">XS</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input x">
                    <input type="radio" id="S" name="size" value="">
                    <label for="S" class="s-size">S</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input x">
                    <input type="radio" id="M" name="size" value="">
                    <label for="M" class="m-size">M</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input x">
                    <input type="radio" id="L" name="size" value="">
                    <label for="L" class="l-size">L</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input xl">
                    <input type="radio" id="XL" name="size" value="">
                    <label for="XL" class="two-size">XL</label>
                    <div class="check"></div>
                </div>
                <div class="custom-input xxl">
                    <input type="radio" id="XXL" name="size" value="">
                    <label for="XXL" class="three-size">XXL</label>
                    <div class="check"></div>
                </div>
{{--                <div class="custom-input xxxl">--}}
{{--                    <input type="radio" id="XXXL" name="size" value="">--}}
{{--                    <label for="XXXL" class="four-size">XXXL</label>--}}
{{--                    <div class="check"></div>--}}
{{--                </div>--}}

{{--                    <a href="{{route('pr_color','blue')}}">blue</a>--}}
{{--                    <a href= {{route('one_product',[$name,'blue'])}}>blue</a>--}}
{{--                <button id = "bluebtn" type="button" onclick="ChangeColor()">blue</button>--}}


            </div>
            <button id="buttonAdd"  type="button" ><a href="{{route('addCart',$details[0]->product_id)}}">ADD TO BAG</a> </button>
            <div class="information">
                <p class="des">
                    the Cargo Drawcord Shorts are designed with a relaxed fit throughout, cargo pockets at the side seam and front, which extend past the length of the shorts, a stretch waistband, and is finished with a yellow elastic drawcord with metal aglets.
                </p>
                <div class="detail">
                    <p>detail</p>
                    <ul>
                        <li>relaxed fit</li>
                        <li>100% cotton</li>
                        <li>model is 6’1, 140 lbs and wears a size medium</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
