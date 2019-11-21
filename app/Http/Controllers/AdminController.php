<?php

namespace App\Http\Controllers;

use App\bill;
use App\customer;
use App\product_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function adminLogin(){
        return view('admin.adminLogin');
    }
    public function adminHome(){
        if(Auth::user()->level==1){
            $user = customer::all();
            $orders = bill::all();
            $product = product_detail::all();
            return view('admin.Home',compact('user','orders','product'));
        }
        else{
            return redirect()->intended('/');

        }


    }
//    public function all_product(){
//        $all_product = product_detail::all();
//        return view('admin.products',$all_product);
//    }

    public function getOrder(){
        $orders= bill::where('isConfirm',0)->get();
        $order2 = DB::table('bill_details')->join('bills','bill_details.bill_id','=','bills.bill_id')
                                          ->join('products','bill_details.product_id','=','products.product_id')
                                          ->select('bill_details.*','products.product_name',DB::raw('group_concat(products.product_name) as product_list'),
                                                    'bills.email','bills.total_payment','bills.shipTo')
                                          ->where('bills.isConfirm',0)
                                          ->groupBy('bill_details.bill_id')
                                          ->get();
        return view('admin.orders',compact('order2'));

    }
    public function postOrder(Request $req){


    }
    public function postAddproduct(){

    }
    public function addProduct(){

    }
    public function addDetail(){

    }
}
