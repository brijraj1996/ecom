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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/products/{id}', 'FrontController@product')->name('product');
Route::get('/products', 'FrontController@products')->name('products');
Route::get('/login', 'FrontController@login')->name('login');
Route::get('/success', 'FrontController@success')->name('success');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');





Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
    Route::resource('categories', 'CategoryController');
    Route::get('orders/{type?}', 'OrderController@Orders');
    
    
    Route::resource('products', 'ProductController');

});