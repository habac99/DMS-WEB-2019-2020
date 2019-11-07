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

Route::get('/product/{product_name}',[
    'as'=>'one_product',
    'uses'=> 'CustomerController@one_product'
]);
Route::group(['prefix'=>'memberLogin'],function (){
    Route::get('/', 'CustomerController@getLogin');
    Route::post('/','CustomerController@postLogin');
});
Route::get('/admin', 'AdminController@adminLogin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
