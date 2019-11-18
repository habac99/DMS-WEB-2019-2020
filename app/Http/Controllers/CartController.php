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
        Cart::add(['id' => $req->id, 'name' => $product->product_name, 'qty' => 1,'weight' => 550, 'price'=>$product->unit_price,'options' => ['color'=>$req->color]]);
        $data = Cart::content();
          return redirect()->intended('/Cart/preCheck-out');
        //dd($data);
      //  return back();
    }

    public  function checkOut(){
        $data = Cart::content();
        dd($data);
    }
}
