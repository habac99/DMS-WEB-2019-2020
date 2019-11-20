<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\product;

class CartController extends Controller
{
    //
    public function addCart(Request $req){
        $product = Product::find($req->id);

        Cart::add(['id' => $req->id, 'name' => $product->product_name, 'qty' => 1,'weight' => 550, 'price'=>$product->unit_price,'options' => ['color'=>$req->color,'img'=>$product->image]]);
        return back();
    }

    public  function checkOut(){
        $items = Cart::content();
        $product_type = $this->product_type;
       return view('customer.checkout',compact('product_type','items'));
//        $data = Cart::content();
//        dd($data);
    }
    public function deleteCart(Request $req){
        Cart::remove($req->id);
        return back();
    }
    public function updateCart(Request $req){
        Cart::update($req->rowId, $req->qty);
    }
}
