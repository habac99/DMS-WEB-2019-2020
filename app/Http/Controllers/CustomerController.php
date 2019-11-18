<?php

namespace App\Http\Controllers;

use App\customer;
use App\product;
use App\product_detail;
use App\User;
use App\product_type;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;




use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class CustomerController extends Controller
{
    //


    public function homepage(){

        $product_type = $this->product_type;
        $cart_details = Cart::content();
       // $best_seller = product_detail::with('product')->select('product_details.*','products.product_name')->orderBy('sold','desc')->limit(4)->get();
        $best_seller = DB::table('product_details')
                                ->join('products','product_details.product_id','=','products.product_id')
                                ->select('product_details.*','products.product_name','products.unit_price')
                                ->orderBy('sold','desc')
                                ->limit(4)
                                ->get();
        $new_product = DB::table('products')->orderBy('product_id', 'desc')->limit(4)->get();
dd($cart_details);
       // return view('homepage', compact('product_type','new_product','best_seller','cart_details'));

    }
    public function product_type (Request $req){
        $query = DB::table('product_types')->where('type_name', $req->type_name)->get();
        $id = $query[0]->type_id;

        $type_name = $req->type_name;
        $product_type = $this->product_type;
       // $product_type = DB::table('product_types')->get();
        $product_list =  DB::table('products')->where('type_id', $id)->paginate(3);

        return view('customer.product_type', compact('type_name','product_type','product_list'));


    }
//    public function one_product( Request $req ){
//      //  echo $req->product_name;
//        $name = $req->product_name;
//        $query = DB::table('products')->where('product_name',$req->product_name)->get();
//        $id = $query[0]->product_id;
////        $details = DB::table('product_details')->select('product_details.*',DB::raw('group_concat(color) as colors'))
////                                                     ->where('product_id',$id)
////                                                     ->groupBy('product_id')
////                                                     ->get();
//        $details = DB::table('product_details')->where('product_id',$id)->get();
//        $json_data = json_encode($details, JSON_PRETTY_PRINT);
//
//        file_put_contents(base_path('public/details.json'), stripslashes($json_data));
//        $product_type = DB::table('product_types')->get();
//
//        return view('customer.one_product', compact('name','details','product_type'));
//
//    }
    public function product_color(Request $req)
    {
        $name = $req->product_name;
        $query = DB::table('products')->where('product_name', $req->product_name)->get();
        $id = $query[0]->product_id;
        if ($req->color) {
            $details = DB::table('product_details')->where('product_id', $id)->where('color', $req->color)->get();
        }else{
            $details = DB::table('product_details')->where('product_id',$id)->limit(1)->get();

        }
        $product_type = $this->product_type;
        return response()
            -> view('customer.one_product', compact('name','details','product_type'));


    }
    public function all_product(){
        //$all_products = DB::table('products')->get();
        $all_products = product::all();
        $product_type = $this->product_type;
        return response()
            ->view('customer.all_product', compact('all_products', 'product_type'));


    }
    public function getLogin(){
        $product_type = $this->product_type;
        return view('customer.login',compact('product_type'));

    }
    public function postLogin(Request $req){
        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])) {
            if (Auth::User()->level == 1) {
                return redirect()->intended('/Admin');

            } else {
                return redirect()->intended('/');


            }
        }else{
            return back()->withInput()->with('error', 'Email or Password is incorrect');
        }

    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('/');
    }

    public function getSignup(){
        $product_type = $this->product_type;
        return view('customer.signup',compact('product_type'));

    }
    public function postSignup(Request $req){
//        try {
//            $this->validate(
//                [
//                    'email' => 'require|email|unique:user,email'
//                ],
//                [
//                    'email.require'=>'Please enter your email',
//                ]
//
//            );
//        } catch (ValidationException $e) {
//        }
        $user = new User();
        $user->first_name = $req ->firstname;
        $user->last_name = $req->lastname;
        $user->email = $req ->email;
        $user->password = bcrypt($req->password);
        $user->save();
        Auth::login($user,true);
        return redirect()->intended('/');


    }


}
