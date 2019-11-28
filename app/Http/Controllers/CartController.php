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
        if(Auth::check()) {
            $instance = Auth::user()->customer_id;
        }
        else{
            $instance = 'guest';
        }
        Cart::instance($instance)->add(['id' => $req->id,
                                  'name' => $product->product_name,
                                  'qty' => 1, 'weight' => 550,
                                  'price' => $product->unit_price,
                                  'options' => ['color' => $req->color, 'img' => $product->image, 'size' => $req->size]]);
        return back();
//        $data = Cart::instance($instance)->content();
//        dd($data);
//        //dd(Cart::content()->count());



    }
    public function postAddCart(Request $req){
//        $product = Product::where('product_name',R);
//        if(Auth::check()) {
//            $instance = Auth::user()->customer_id;
//        }
//        else{
//            $instance = 'guest';
//        }
//        cart::instance($instance)->add(['id' => $req->id,
//            'name' => $product->product_name,
//            'qty' => 1, 'weight' => 550,
//            'price' => $product->unit_price,
//            'options' => ['color' => $req->color, 'img' => $product->image, 'size' => $req->size]]);
//        return back();
     //   dd($req);

    }

    public  function checkOut(){
        if(Auth::check()){
            $data['items'] = Cart::instance(Auth::User()->customer_id)->content();
        }else{
            $data['items'] =  Cart::instance('guest')->content();
        }

        //$data['backUp'] = $data['items'];

        $data['product_type'] = $this->product_type;
       return view('customer.checkout',$data);
//        $data = Cart::content();
//        dd($data);
    }
    public function saveBill(Request $req){
        if(Auth::check()){
            $instance = Auth::User()->customer_id;
        }else{
            $instance  =  'guest';
        }
        $bill= new bill;
        if(Auth::check()){
            $bill->customer_id = Auth::User()->customer_id;

        }
            $bill->order_date  = Carbon::now()->format('d-m-y H:i:s');
            $bill->email = $req->email;
            $bill->total_payment = Cart::instance($instance)->total();
            $bill->shipTo = $req->address;
            $bill->save();

        $latest = DB::table('bills')->latest()->get();


        $items = Cart::instance($instance)->content();
        foreach($items as $item){
            $bill_details = new bill_detail;
            $bill_details->more_info = $item->options->color.','.$item->options->size;
            $bill_details->bill_id = $latest[0]->bill_id;
            $bill_details->product_id = $item->id;
            $bill_details->quantity = $item->qty;
            $bill_details->unit_price = $item->price;
            $bill_details->save();


        }
            Cart::instance($instance)->destroy();

        return back()->withInput()->with('Success','Order successfully');
    }
    public function deleteCart(Request $req){
        if(Auth::check()){
            Cart::instance(Auth::User()->customer_id)->remove($req->id);
        }
        else{
            Cart::instance('guest')->remove($req->id);
        }

        return back();
    }
    public function updateCart(Request $req){
        if(Auth::check()){
            Cart::instance(Auth::User()->customer_id)->update($req->rowId, $req->qty);
        }
        else{
            Cart::instance('guest')->update($req->rowId, $req->qty);
        }

    }
}
