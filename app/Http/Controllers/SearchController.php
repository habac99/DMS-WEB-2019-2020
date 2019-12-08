<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class SearchController extends Controller{
    public function search(Request $request){
        $data['keyword']= $request->keyword;
        $data['keyword'] = strtoupper($data['keyword']);
      // $keyword = str_replace(' ','%',$keyword);
       $data['product_type'] = $this->product_type;
      // dd($keyword);
       $data['all_products'] = product::where('product_name','like', '%'.$data['keyword'].'%')->get();
       // $all_products = product::where('product_name','like', '%'.$keyword.'%');

       // dd($all_products );
      return view('customer.search',$data);




    }

}
