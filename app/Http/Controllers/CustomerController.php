<?php

namespace App\Http\Controllers;

use App\product_model;
use App\product_types_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function homepage(){
        return view('homepage');

    }
    public function product_type (Request $req){
        $query = DB::table('product_types')->where('type_name', $req->type_name)->get();
        $id = $query[0]->type_id;
//        echo $req->type_name;
//        echo $id;
        $type_name = $req->type_name;
        $product_list =  DB::table('products')->where('type_id', $id)->get();

        return view('customer.product_type', compact('type_name','product_list'));


    }
    public function one_product( Request $req ){
        echo $req->product_name;
        $name = $req->product_name;
        $query = DB::table('products')->where('product_name',$req->product_name)->get();
        $id = $query[0]->product_id;
        $details = DB::table('product_details')->where('product_id', $id)->get();


        return view('customer.one_product', compact('name','details'));

    }



}
