<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
use Illuminate\Support\Facades\Route;

Route::get('/',[
    'as'=>'Homepage',
    'uses'=>'CustomerController@homepage'
]);
Route::get('/product_type/{type_name}',[
    'as'=> 'product_type',
    'uses' => 'CustomerController@product_type'
]);
Route::get('/Allproducts',[
    'as'=>'allproduct',
    'uses'=>'CustomerController@all_product'
]);


route::get('/product/{product_name}/{color?}', 'CustomerController@product_color')->name('one_product');
//    route::get(','CustomerController@product_color')->name('pr_color');
//}


Route::group(['prefix'=>'Signin','middleware'=>'checkLogin'],function (){
    Route::get('/', 'CustomerController@getLogin')->name('mLogin');
    Route::post('/','CustomerController@postLogin');
});
Route::group(['prefix'=>"signup",'middleware'=>'checkLogin'],function (){
    route::get('/','CustomerController@getSignup')->name('sign up');
    route::post('/','CustomerController@postSignup');
});
Route::group(['prefix'=>'Admin','middleware'=>'checkLogout'],function (){
    Route::get('/','AdminController@adminHome')->name('adminHome');

    Route::group(['prefix'=>'product'],function (){
        Route::get('/', 'ProductController@all_product')->name('adminProduct');

        Route::get('add','ProductController@getAddProduct')->name('addProduct');
        Route::post('add','ProductController@postAddProduct');

    });

});
Route::get('/logout','CustomerController@getLogout')->name('logout');

//Auth::routes();
Route::group(['prefix'=>'Cart'], function (){
    Route::get('add/{id}/{color?}', 'CartController@addCart')->name('addCart');
    Route::get('/preCheck-out', 'CartController@checkOut')->name('checkOut');
});

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
