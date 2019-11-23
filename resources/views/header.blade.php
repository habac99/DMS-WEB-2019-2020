
<div class="header-menu" id="nav-menu">
    <div class="main-menu">
        <div class="left-menu">
            <div class="menu-layer1">
                <button id="tle" class="dropbtn">Shop</button>
                <div class="menu-layer2" id="drop-down">
                    <ul>
                        <li>
                            <a href={{route('allproduct')}}>
                                <p>ALL PRODUCT</p>
                            </a>
                        </li>
                        @foreach($product_type as $pr_type)
                            <li>
                                <a href={{route('product_type',$pr_type->type_name)}}>
                                    <p>{{$pr_type->type_name}}</p>
                                    <img src="{{ asset($pr_type->image) }}" alt="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- <a href="#">About</a> -->
        </div>
        <div class="logo-middle">
            <a href={{route('Homepage')}} class="logo">s l m p l e</a>
        </div>




        <div class="right-menu">
            <form method="get" action="{{route('search')}}">
            <input type="text" required name="keyword" class="form-control" placeholder="Search product" />
            </form>
            @if(Auth::check() )
                <a id="name-user" href="">{{Auth::User()->first_name}}</a>
                <div class="newest-layer">
{{--                    <a href="">{{Auth::User()->first_name}}</a>--}}
                    <a href={{route('logout')}}>Log Out</a>
                </div>
            <div class="container-cart">
                <a href="{{route('checkOut')}}" class="fas fa-shopping-cart cart" ></a>
                <span class="count-cart">{{Cart::instance(Auth::User()->customer_id)->content()->groupBy('rowId')->count()}} </span>
            </div>

{{--              <div><a href={{route('logout')}}>Log Out</a> </div>--}}
            @else
                <div><a href={{route('mLogin')}}>My account</a></div>
                <div class="container-cart">
                    <a href="{{route('checkOut')}}" class="fas fa-shopping-cart cart" ></a>
                    <span class="count-cart">{{Cart::instance('guest')->content()->groupBy('rowId')->count()}} </span>
                </div>

            @endif

        </div>

    </div>
</div>

