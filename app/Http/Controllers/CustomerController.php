<?php

namespace App\Http\Controllers;

use App\product_model;
use App\product_types_model;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CustomerController extends Controller
{
    //
    public function homepage(){

        $product_type = DB::table('product_types')->get();
        return view('homepage', compact('product_type'));

    }
    public function product_type (Request $req){
        $query = DB::table('product_types')->where('type_name', $req->type_name)->get();
        $id = $query[0]->type_id;
//        echo $req->type_name;
//        echo $id;
        $type_name = $req->type_name;

        $product_type = DB::table('product_types')->get();
        $product_list =  DB::table('products')->where('type_id', $id)->get();

        return view('customer.product_type', compact('type_name','product_list','product_type'));


    }
    public function one_product( Request $req ){
      //  echo $req->product_name;
        $name = $req->product_name;
        $query = DB::table('products')->where('product_name',$req->product_name)->get();
        $id = $query[0]->product_id;
//        $details = DB::table('product_details')->select('product_details.*',DB::raw('group_concat(color) as colors'))
//                                                     ->where('product_id',$id)
//                                                     ->groupBy('product_id')
//                                                     ->get();
        $details = DB::table('product_details')->where('product_id',$id)->get();
        $product_type = DB::table('product_types')->get();

        return view('customer.one_product', compact('name','details','product_type'));

    }
    public function all_product(){
        $all_products = DB::table('products')->get();
        $product_type = DB::table('product_types')->get();
        return view('customer.all_product', compact('all_products', 'product_type'));

    }
    public function getLogin(){
        return view('customer.login');

    }
    public function postLogin(Request $req){
        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
            dd('Thành công');

        }else{

            dd($req->email);
        };

    }


}
