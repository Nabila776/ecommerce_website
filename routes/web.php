<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// route::get('/home',function(){
//     return "I am a good boy";
// });

route::get('/admin','App\Http\Controllers\Admin\AuthController@index')->name('adminlogin');
route::post('/admin','App\Http\Controllers\Admin\AuthController@postLogin')->name('adminlogin');


route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')->middleware('preventlogin')->name('dashboard');

route::get('/homePage','App\Http\Controllers\Website\HomeController@index')->name('homePage');
route::get('/shop','App\Http\Controllers\Website\ShopController@index')->name('shop');
route::get('/shopDetails','App\Http\Controllers\Website\ShopController@details')->name('shopDetails');
//route::get('/shoppingCart','App\Http\Controllers\Website\ShopController@cart')->name('shoppingCart');

route::get('/blog','App\Http\Controllers\Website\BlogController@index')->name('blog');
route::get('/blogDetails','App\Http\Controllers\Website\BlogController@details')->name('blogDetails');

route::get('/checkout','App\Http\Controllers\Website\CheckoutController@index')->name('checkout');

route::get('/contact','App\Http\Controllers\Website\ContactController@index')->name('contact');

route::get('/privacypolicy','App\Http\Controllers\Website\HomeController@privacyPolicy')->name('privacy.policy');

route::get('/deliverinfo','App\Http\Controllers\Website\HomeController@deliveryInformation')->name('deliver');

route::post('/deliverinfo','App\Http\Controllers\Website\HomeController@addDelivery')->name('deliver');

route::get('/addCart/{id}','App\Http\Controllers\Website\CartController@addCart')->name('add.cart');
route::get('/shoppingCart','App\Http\Controllers\Website\CartController@cart')->name('shoppingCart');
route::get('/showCart','App\Http\Controllers\Website\CartController@showCart')->name('show.cart');

//route::get('/continueShopping','App\Http\Controllers\Website\CartController@continueShopping')->name('continue.shopping');






