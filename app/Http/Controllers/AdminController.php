<?php

namespace App\Http\Controllers;

use App\bill;
use App\product_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminLogin(){
        return view('admin.adminLogin');
    }
    public function adminHome(){
        if(Auth::user()->level==1){
            return view('admin.Home');
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

        return view('admin.orders',compact('orders'));

    }
    public function postAddproduct(){

    }
    public function addProduct(){

    }
    public function addDetail(){

    }
}
