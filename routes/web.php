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


use App\Item;
use TCG\Voyager\Models\Category;

Route::get('/',['as'=>'welcome', function () {
    return view('welcome');
}]);
Route::get('about-us' , ['as'=>'about-us',function (){
    return view('about-us');
}]);
Route::get('payment' , function (){
    return view('paymentPage');
});
Route::get('contact-us' , function (){
    return view('contact-us');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/categories','CatController@index');
Route::get('/categories/{slug}','CatController@show')->name('cat.show');
Route::get('/categories/{cat_id}/{id}','SubCatController@showDesc')->name('sub.showDesc');

Route::get('/categories/{cat_id}/{id}','SubCatController@show')->name('sub.show');


Route::get('/categories/{cat_id}/{sub_cat_id}/{id}',['uses'=>'ItemController@show']);


Route::get('/items','ItemController@index');

Route::resource('/cart','CartController');


Route::post('contact-us', 'MailSetting@send_form');

Route::post('cart', 'OrderSetting@send_form');


