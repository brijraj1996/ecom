<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
    Route::get('upload/{id}', 'UploadController@uploadform');
    Route::post('upload/submit','UploadController@uploadSubmit');
    // Route::post('/upload', 'UploadController@uploadSubmit');
    Route::resource('products', 'ProductController');
    Route::resource('address','AddressController');
    // Route::get('/products/delete','ProductController@destroy');
    Route::resource('categories', 'CategoryController');
    Route::get('orders/{type?}', 'OrderController@Orders');
    
    
    
    
    
   

});

Route::get('/', 'FrontController@index')->name('home');
Route::get('/products/{id}', 'FrontController@product')->name('product');
Route::get('/products', 'FrontController@products')->name('products');
Route::get('/login', 'FrontController@login')->name('login');
Route::get('/success', 'FrontController@success')->name('success');
Route::resource('cart','CartController');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('checkout','CheckoutController@step1');
Route::get('shipping','CheckoutController@shipping')->name('checkout.shipping');
Route::resource('address','AddressController');





