<?php

namespace App\Http\Controllers;

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
    public function all_product(){
        return view('admin.products');
    }

    public function getAddProduct(){

    }
    public function postAddproduct(){

    }
    public function addProduct(){

    }
    public function addDetail(){

    }
}
