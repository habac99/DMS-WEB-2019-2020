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
            $data['user'] = customer::all();
            $data['orders']= bill::where('isConfirm',0)->get();
            $data['product'] = product_detail::all();
            return view('admin.Home',$data);
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
        $data['orders']= bill::where('isConfirm',0)->get();
//        $idList = bill::select('bill_id')->where('isConfirm',0)->get();
//        $idList = $idList->toArray();
//        $i =',';


//        $list = DB::table('bill_details')->join('product','bill_details.product_id','=','products.product_id')




//        $data['orders'] = DB::table('bill_details')->join('bills','bill_details.bill_id','=','bills.bill_id')
//                                          ->join('products','bill_details.product_id','=','products.product_id')
//                                          ->select('bill_details.*','products.product_name',
//                                                    DB::raw('group_concat(products.product_name) as product_list'),
//                                                    'bills.email','bills.total_payment','bills.shipTo')
//                                          ->where('bills.isConfirm',0)
//                                          ->groupBy('bill_details.bill_id')
//                                          ->get();

        $data['details'] =DB::table('bill_details')->join('bills','bill_details.bill_id','=','bills.bill_id')
                                                                ->join('products','bill_details.product_id','=','products.product_id')
                                                                ->select('bill_details.*','products.product_name',
                                                                    'bill_details.more_info'  , 'bill_details.quantity'
                                                                    )
                                                                ->where('bills.isConfirm',0)
//                                                                ->groupBy('bill_details.bill_id')
                                                                ->get();




//            dd($tes2[15]->order_detail);
        return view('admin.orders',$data);
    }
    public function confirmOrder(Request $req){
        $order = bill::find($req->id);
        $order ->isConfirm = 1;
        $order->save();
        return back();


    }
    public function postAddproduct(){

    }
    public function addProduct(){

    }
    public function addDetail(){

    }
}
