<?php

namespace App\Http\Controllers;

use App\bill;
use App\bill_detail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function saveBill(Request $req){
        $bill= new bill;
        if(Auth::check()){
            $bill->customer_id = Auth::User()->customer_id;

        }
            $bill->order_date  = Carbon::now()->format('d-m-y H:i:s');
            $bill->email = $req->email;
            $bill->total_payment = Cart::total();
            $bill->shipTo = $req->address;
            $bill->save();

        $latest = DB::table('bills')->latest()->get();
        //$bill_details = new bill_detail;
        $items = Cart::content();
        foreach($items as $item){
            $bill_details = new bill_detail;
            $bill_details->bill_id = $latest[0]->bill_id;
            $bill_details->product_id = $item->id;
            $bill_details->quantity = $item->qty;
            $bill_details->unit_price = $item->price;
            $bill_details->save();


        }
            Cart::destroy();

        return back();
    }
    public function deleteCart(Request $req){
        Cart::remove($req->id);
        return back();
    }
    public function updateCart(Request $req){
        Cart::update($req->rowId, $req->qty);
    }
}
