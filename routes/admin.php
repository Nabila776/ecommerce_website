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

route::get('/neworder','App\Http\Controllers\Admin\OrderController@index')->name('neworder');

route::get('/manageorder','App\Http\Controllers\Admin\OrderController@manage')->name('manageorder');

route::get('/updateorder','App\Http\Controllers\Admin\OrderController@updateorder')->name('updateorder');

route::get('/addproduct','App\Http\Controllers\Admin\ProductController@prductform')->name('addproduct');
route::post('/addproduct','App\Http\Controllers\Admin\ProductController@addProduct')->name('addproduct');

route::get('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@editproduct')->name('editproduct');
route::put('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@updateProduct')->name('editproduct');

route::get('/manageproduct','App\Http\Controllers\Admin\ProductController@manageproduct')->name('manageproduct');

route::get('/addcatagory','App\Http\Controllers\Admin\CatagoryController@addcatagory')->name('addcatagory');
route::post('/addcatagory','App\Http\Controllers\Admin\CatagoryController@postCatagory')->name('addcatagory');


route::get('/editCategory/{id}','App\Http\Controllers\Admin\CatagoryController@editCategory')->name('editCategory');
route::put('/editCategory/{id}','App\Http\Controllers\Admin\CatagoryController@updateCategory')->name('editCategory');

route::get('/deleteCategory/{id}','App\Http\Controllers\Admin\CatagoryController@deleteCategory')->name('deleteCategory');

route::get('/subcategory/{id}','App\Http\Controllers\Admin\CatagoryController@subcategory')->name('subcategory');


route::get('/addorder','App\Http\Controllers\Admin\OrderController@ordertable')->name('ordertable');

route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');



//contact--start
route::get('/contactus','App\Http\Controllers\Admin\CmsController@contactUs')->name('contact.us');

route::post('/contactus','App\Http\Controllers\Admin\CmsController@updateContact')->name('contactus');
//contact--end

//banner -- start
route::get('/addbanner','App\Http\Controllers\Admin\CmsController@addBanner')->name('add.banner');

route::post('/addbanner','App\Http\Controllers\Admin\CmsController@updateBanner')->name('add.banner');

// route::get('/addbanner','App\Http\Controllers\Admin\CmsController@addBanner')->name('addbanner');
//banner -- end

//delivery -- start
route::get('/deliveryinfo','App\Http\Controllers\Admin\CmsController@deliveryInfo')->name('delivery.info');

//route::get('/updatedelivery/{id}','App\Http\Controllers\Admin\CmsController@editeDelivery')->name('updatedelivery');

 route::post('/updatedelivery/{id}','App\Http\Controllers\Admin\CmsController@updateDelivery')->name('update.delivery');

//delivery -- end
route::get('/sitemap','App\Http\Controllers\Admin\CmsController@siteMap')->name('sitemap');

route::get('/privacy','App\Http\Controllers\Admin\CmsController@privacy')->name('privacy');

route::post('/privacy','App\Http\Controllers\Admin\CmsController@updatePrivacy')->name('privacy');

route::get('/appsetting','App\Http\Controllers\Admin\SettingController@appSetting')->name('app.setting');

route::get('/smssetting','App\Http\Controllers\Admin\SettingController@smsSetting')->name('sms.setting');

route::get('/emailsetting','App\Http\Controllers\Admin\SettingController@emailSetting')->name('email.setting');
