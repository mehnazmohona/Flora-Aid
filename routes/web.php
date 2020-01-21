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


Route::get('/','Frontend\ViewController@index')->name('welcome');
Route::get('/faq','Frontend\ViewController@faq')->name('faq');
Route::get('/products','Frontend\ViewController@products')->name('products');
Route::get('/products-details/{id}','Frontend\ViewController@productsDetails')->name('products-details');
// Route::get('/cart','Frontend\ViewController@cart')->name('cart');
// Route::get('/checkout','Frontend\ViewController@checkout')->name('checkout');
Route::get('/order-confirm','Frontend\ViewController@orderConfirm')->name('order-confirm');
Route::get('/orders','Frontend\AccountController@orders')->name('orders');
Route::get('/order','Frontend\AccountController@order')->name('order');
Route::get('/home','Frontend\AccountController@account')->name('account');

Route::get('/store-product','Frontend\AccountController@storeProduct')->name('store-product');
Auth::routes();
//Add to cart and Order
Route::get('/carts', 'Frontend\CartsController@index')->name('carts');
Route::post('/carts/store', 'Frontend\CartsController@store')->name('carts.store');
Route::post('/carts/update/{id}', 'Frontend\CartsController@update')->name('carts.update');
Route::post('/carts/delete/{id}', 'Frontend\CartsController@destroy')->name('carts.delete');



Route::get('/checkout', 'Frontend\CheckoutsController@index')->name('checkouts');
Route::post('/checkout/store', 'Frontend\CheckoutsController@store')->name('checkouts.store');

// Route::get('/home', 'HomeController@index')->name('home');


//contact message
Route::get('/contact','Frontend\ContactController@contact')->name('contact');
Route::post('/contact-message-send','Frontend\ContactController@send')->name('contact-messages-send');
//search
 Route::get('/search', 'Frontend\ViewController@search')->name('search');
 
//post route
Route::post('/gardener-info-post','Frontend\GardenerController@infopost')->name('gardener-info-post');
Route::post('/retailer-info-post','Frontend\RetailerController@rinfopost')->name('retailer-info-post');

//retailer store product view product
Route::post('/store-product','Frontend\ProductController@storeProduct')->name('store-product');
Route::post('/store-product/delete/{id}', 'Frontend\ProductController@productDestroy')->name('store-product-delete');
Route::get('/own-product','Frontend\ProductController@ownProduct')->name('own-product');
// Route::get('/new','Frontend\ProductController@new')->name('new');





//admin
Route::group(['prefix' => 'backend'], function(){
	 // Admin Login Routes
	  Route::get('/', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	  Route::post('/adminlogin-submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	  Route::post('/adminlogout-submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');
	//Others Routes
	Route::get('/deshboard', 'admin\AdminViewController@index')->name('admin.index');
	Route::get('/message', 'admin\AdminViewController@message')->name('admin.message');
	Route::get('/retailer', 'admin\AdminUserManageController@retailer')->name('admin.retailer');
	Route::get('/gardener', 'admin\AdminUserManageController@gardener')->name('admin.gardener');
	Route::get('/product','admin\AdminProductManageController@product')->name('admin.product');
	Route::post('/product/delete/{id}', 'admin\AdminProductManageController@productDelete')->name('product.delete');
	Route::get('/faq','admin\AdminFaqController@faqView')->name('admin-faq');
	Route::get('/manage/faq','admin\AdminFaqController@faqManage')->name('admin-manage-faq');
	Route::post('/faq/delete/{id}', 'admin\AdminFaqController@faqDelete')->name('faq.delete');
	Route::get('/faq/edit/{id}','admin\AdminFaqController@faqEdit')->name('admin-faq-edit');
	Route::post('/faq/post','admin\AdminFaqController@faqPost')->name('admin-faq-post');
	Route::post('/faq/update/{id}','admin\AdminFaqController@faqUpdate')->name('admin-faq-update');
	// Route::post('/rt/delete/{id}', 'admin\AdminUserManageController@destroy')->name('rt.delete');

});