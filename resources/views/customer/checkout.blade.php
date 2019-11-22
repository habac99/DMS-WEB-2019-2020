@extends('master')
<link rel="stylesheet" href="/css/checkout.css">
<script src="/js/jquery.js"></script>

@section('title')
    Check Out
    @endsection
@section('content')
    <script>
        function updateCart(qty,rowId) {
            console.log(qty);
            console.log(rowId);
            $.get(
                '{{route('updateCart')}}',
                {qty:qty, rowId:rowId},
                function () {
                    location.reload();

                }
            )

        }
    </script>


        @if(Cart::count()>0)
        <div class="left">
            <p>s l m p l e</p>
            <ul>
                <li>Cart</li>
                <li>
                    <div class="fas fa-chevron-right"></div>
                </li>
                <li>Information</li>
            </ul>
            <form role="form" method="post" >

                @if(Auth::check())
                    <p class="header">CONTACT INFORMATION</p>
                    <div class="contact">
                        <div class="text">Email</div>
                        <input type="email" name="email" class="contact-gmail" value="{{Auth::User()->email}}">
                    </div>
                    <p class="header">SHIPPING ADDRESS</p>
                    <div class="shipping-address">
                        <div class="name">
                            <div class="firstname-container">
                                <div class="text">First name</div>
                                <input type="text" class="name-class" value={{Auth::User()->first_name}}>
                            </div>
                            <div class="lastname-container">
                                <div class="text">Last name</div>
                                <input type="text" class="name-class" value={{Auth::User()->last_name}}>
                            </div>
                        </div>
                        <div class="address-container">
                            <div class="text">Address</div>
                            <input type="text"name="address" class="address" value="{{Auth::User()->address}}" >
                        </div>
                        <div class="city-container">
                            <div class="text">City</div>
                            <input type="text" class="address">
                        </div>
                        <div class="phone-container">
                            <div class="text">Phone</div>
                            <input type="text" value="{{Auth::User()->phone_number}}" >
                        </div>
                @else
                <p class="header">CONTACT INFORMATION</p>
                <div class="contact">
                    <div class="text">Email</div>
                    <input name="email" type="email" class="contact-gmail">
                </div>
                <p class="header">SHIPPING ADDRESS</p>
                <div class="shipping-address">
                    <div class="name">
                        <div class="firstname-container">
                            <div class="text">First name</div>
                            <input name="first_name" type="text" class="name-class">
                        </div>
                        <div class="lastname-container">
                            <div class="text">Last name</div>
                            <input type="text" class="name-class">
                        </div>
                    </div>
                    <div class="address-container">
                        <div class="text">Address</div>
                        <input name="address" type="text" class="address">
                    </div>
                    <div class="city-container">
                        <div class="text">City</div>
                        <input type="text" class="address">
                    </div>
                    <div class="phone-container">
                        <div class="text">Phone</div>
                        <input name="phone" type="text">
                    </div>
                    @endif
                    <a href="{{route('save')}}" ><button class="btn-submit-new" type="submit" name="subcribe">ACCEPT</button> </a>
                </div>

                </div>
                    {{csrf_field()}}
            </form>

            <div class="right">
                <table class="product-table scroll">
                    <thead>
                        <th class="img-width"></th>
                        <th class="des-width"></th>
                        <th class="count-width"></th>
                        <th class="price-width"></th>
                        <th class="delete-btn"></th>
                    </thead>
                    <tbody id="tbody-container">
                        @foreach($items as $item)
                        <tr id="product-1">
                            <td class="img-width"><img src="{{asset($item->options->img)}}" alt=""></td>
                            <td class="des-width">
                                <div>{{$item->name}}</div>
                                <div>{{$item->options->color}}</div>
                            </td>
                            <td class="count-width">
                                <input type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
                            </td>
                            <td class="price-width">${{$item->price}}</td>
                            <td class="price-width">${{$item->price * $item->qty }}</td>
                            <td class="delete-btn"> <a  href="{{route('deleteCart',$item->rowId)}}"  ><i class="far fa-trash-alt" id="get-delete"></i> </a>  </td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
                <hr class="hr-content">
                <div class="subtotal">
                    <div>SUBTOTAL</div>
                    <div class="sub-number">${{Cart::total()}}</div>
                </div>
                <div class="shipping">
                    <div>SHIPPING</div>
                    <div class="shipping-number">FREE</div>
                </div>
                <hr class="hr-content">
                <div class="total">
                    <div>TOTAL</div>
                    <div class="total-number">${{Cart::total()}}</div>
                </div>
         </div>
        </div>


        @else
            <div class="empty-checkout">
                Looks like your bag is empty.<br>
                Let's add a thing or two.
            </div>
        @endif


    @endsection

