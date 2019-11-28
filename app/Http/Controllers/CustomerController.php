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
//dd($cart_details);
        return view('homepage', compact('product_type','new_product','best_seller','cart_details'));

    }
    public function product_type (Request $req){


        $data['type_name'] = $req->type_name;

        $data['product_type'] = $this->product_type;
//       $product_list2 = DB::table('product_details')
//                                 ->join()
        $data['product_list2'] = DB::table('product_details')
                                           ->join('products','product_details.product_id','=', 'products.product_id')
                                           ->select('product_details.*','products.product_name','products.unit_price')
                                           ->where('products.type_name',$req->type_name)
                                            ->orderBy('products.product_name')->get();
//        $product_list =  DB::table('products')->where('type_name', $type_name)->get();

        return view('customer.product_type', $data);


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
        $data['name'] = $req->product_name;
        $query = DB::table('products')->where('product_name', $req->product_name)->get();
        $id = $query[0]->product_id;
        $data['colors'] = product_detail::select('color')->where('product_id',$id)->get();
        $color = strtolower($req->color);

        if ($req->color) {
            $data['details'] = DB::table('product_details')->join('products','product_details.product_id','=','products.product_id')
                                                         ->select('product_details.*','products.unit_price','products.description')
                                                         ->where('product_details.product_id', $id)->where('product_details.color', $color)->get();
        }else{
            $data['details'] = DB::table('product_details')->join('products','product_details.product_id','=','products.product_id')
                                                         ->select('product_details.*','products.unit_price','products.description')
                                                         ->where('product_details.product_id',$id)->get();

        }
        $json_data = json_encode($data['details'] , JSON_PRETTY_PRINT);
//
    file_put_contents(base_path('storage/app/public/details.json'), stripslashes($json_data));
        $data['product_type'] = $this->product_type;
        return response()
            -> view('customer.one_product', $data);




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
        $remember= true;
        if(Auth::attempt(['email'=>strtolower($req->email) , 'password'=>$req->password],$remember)) {
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
            $val = customer::where('email',$req->email)->get();
//          if( !$this->validate($req,
//                [
//                    'email' => 'unique:customers,email',
//                ],
//                [
//                    'email.unique'=>'Email exist'
//                ]
//
//            )
//          ){
//              return back()->withInput()->with('error', 'Email exist');
//          }
        if(count($val)){
            return back()->withInput()->with('error', 'Email exist');

        }
          else {

              $user = new User();
              $user->first_name = $req->firstname;
              $user->last_name = $req->lastname;
              $user->email = strtolower($req->email);
              $user->password = bcrypt($req->password);
              $user->phone_number = $req->phone;
              $user->save();
              Auth::login($user, true);
              return redirect()->intended('/');
          }



    }


}
