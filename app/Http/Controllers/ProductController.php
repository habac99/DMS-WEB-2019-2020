<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Http\Requests\addProduct;

class ProductController extends Controller
{
    public function all_product(){
            return view('admin.products');
        }
    public function getAddProduct(){
        return view('admin.addProduct');

    }
    public function postAddProduct(Request $req){
        //
     //   $filename = $req ->img->getClientOriginalName();
       // dd($filename);
        $photo = $req->file('img');
        $filename = $photo[0]->getClientOriginalName();
       // $req->img->storeAs('img',$filename);
        $product = new product;
        $product->product_name = $req->pr_name;
        $product->description = $req->description;
        $product->unit_price = $req->price;
        $product->type_id = 3;
        $product->image = 'storage/img/'.$filename;
        $product->save();
       // $req->img->storeAs('img',$filename);
       // dd($filename);
        $photo[0]->storeAs('public/img',$filename);
        return back();
    }

}
