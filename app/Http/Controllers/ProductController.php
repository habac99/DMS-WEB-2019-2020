<?php

namespace App\Http\Controllers;

use App\product;
use App\product_detail;
use Illuminate\Http\Request;
use App\Http\Requests\addProduct;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;
use phpDocumentor\Reflection\Types\Null_;

class ProductController extends Controller
{
    public function all_product(){
        $product_all = DB::table('product_details')
                                ->join('products','product_details.product_id','=','products.product_id')
                                ->select('product_details.*','products.product_name','products.unit_price')
                                ->get();
            return view('admin.products',compact('product_all'));
        }
    public function getAddProduct(){
        $type  = $this->product_type;
        return view('admin.addProduct',compact('type'));

    }
    public function postAddProduct(Request $req){
        $check_name= product::where('product_name',strtoupper($req->pr_name))->get();
        $count = count($check_name);
        if($count){
                $query = product_detail::where('product_id',$check_name[0]->product_id)->where('color',strtolower($req->color) )->get();
                $count_color = count($query);
                if($count_color){
                    return back()->withInput()->with('error', 'Product exist');
                }else{
                    if($req->hasFile('img')){
                        $photos = $req->file('img');
                        $product_detail = new product_detail;
                        $product_detail->product_id = $check_name[0]->product_id;
                        $product_detail->color = strtolower($req->color);
                        $img = 'image';
                        for($i = 1; $i<=sizeof($photos);$i++){
                            $imgin = $img.$i;
                            $product_detail-> $imgin = 'storage/img/'.$req->category .'/'. $photos[$i-1]->getClientOriginalName();
                            $photos[$i-1]->storeAs('public/img/'.$req->category .'/',$photos[$i-1]->getClientOriginalName());
                        }
                        $product_detail->save();
                        return back()->withInput()->with('success','Add product successfully.');
                    }else{
                        return back()->withInput()->with('error','Missing product image.');
                    }

                }

//

        }else {
            if($req->hasFile('img')){
                /*
                 * Lưu vào bảng product
                 */
                $photos = $req->file('img');
                $product = new product;
                $product->product_name = strtoupper($req->pr_name);
                $product->description = $req->description;
                $product->unit_price = $req->price;
                $product->type_name = $req->category;
                $product->image = 'storage/img/' .$req->category .'/'. $photos[0]->getClientOriginalName();
                $product->save();
                /*
                 * Lưu vào bảng product details
                 */
                $latest = DB::table('products')->latest()->get();
                $product_detail = new product_detail;
                $product_detail->product_id = $latest[0]->product_id;
                $product_detail->color = $req->color;
                $img = 'image';
                for($i = 1; $i<=sizeof($photos);$i++){
                    $imgin = $img.$i;
                    $product_detail-> $imgin = 'storage/img/'.$req->category .'/' . $photos[$i-1]->getClientOriginalName();
                    $photos[$i-1]->storeAs('public/img/'.$req->category .'/',$photos[$i-1]->getClientOriginalName());
                }
                $product_detail->save();
                return back()->withInput()->with('success','Add product successfully.');

            }else{
                return back()->withInput()->with('error','Missing product image.');
            }


        }

    }
    public function getEditProduct(Request $req){
        $product_edit = DB::table('product_details')
                                  ->join('products','product_details.product_id','=','products.product_id')
                                  ->select('product_details.*','products.product_name','products.unit_price','products.description')
                                -> where('product_details.product_id',$req->id)->where('product_details.color',$req->color)->get();

        return view('admin.editProduct',compact('product_edit'));
    }
    public function postEditProduct( Request $req){
        $product = new product;
        $product_details = new product_detail;
//        if($req->hasFile('img')) {
//            $photos = $req->file('img');
////            $image = 'storage/img/' .$req->category .'/'. $photos[0]->getClientOriginalName();
//
//            $image = 'storage/img/' .'/'. $photos[0]->getClientOriginalName();
            $product::where('product_id', $req->id)->update(['product_name' => strtoupper($req->pr_name),
                                                            'description' => $req->description,
                                                            'unit_price' => $req->price


            ]);
            $product_details::where('product_id', $req->id)->where('color', $req->color)
                            ->update(['instock'=>$req->instock]);
        return back();
        }





    public function deleteProduct(Request $req){

        $count   = DB::table('product_details')->where('product_id','=', $req->id)->get();
        if(count($count)==1){
            DB::table('product_details')->where('product_id',$req->id)->where('color',$req->color)->delete();
            product::destroy($req->id);


        }else{
            DB::table('product_details')->where('product_id',$req->id)->where('color',$req->color)->delete();
        }
        return redirect('/Admin/product');
        //dd($req->id,$req->color,count($count));
//
    }

}
