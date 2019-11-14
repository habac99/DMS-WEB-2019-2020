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
            return view('admin.adminHome');
        }
        else{
            return redirect()->intended('/');

        }


    }
}
