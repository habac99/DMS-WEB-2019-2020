<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerControler extends Controller
{
    //
    public function product_type ( $type_name ){
        return view('customer.product_type',compact($type_name));


    }


}
