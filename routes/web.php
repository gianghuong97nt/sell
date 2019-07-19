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

//Route::get('/', 'HomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


/**
 *
 * Gom nhom  cho admins
 * 
 */

//Route::group([
//    'prefix' => 'admin',
//    'middleware' => 'admin',
//], function() {

    Route::get('/','Admin\AdminController@index')->name('home');
//  Thong tin ca nhan
    Route::get('/info','Admin\AdminController@info')->name('info');
//  Ruoute thay doi mat khau
    Route::get('/changepassword','Admin\AdminController@changePassword')->name('changePassword');
    Route::post('/changepassword','Admin\AdminController@savePassword');

//  Danh sach san pham
    Route::get('/product','Admin\ProductController@index')->name('product');
//  Them moi san pham
    Route::get('/product/add','Admin\ProductController@add');
    Route::post('/product/add','Admin\ProductController@save');
//  Sua san pham
    Route::get('/product/edit','Admin\ProductController@edit')->name('editProduct');
    Route::post('/product/edit','Admin\ProductController@edit');
//  Xoa san pham
    Route::get('/product/delete','Admin\ProductController@delete')->name('deleteProduct');
    Route::post('/product/delete','Admin\ProductController@destroy');
//  Danh sach don hang
    Route::get('/order','Admin\OrderController@oder')->name('order');
//  Xoa san pham
    Route::get('/order/delete','Admin\OrderController@delete')->name('deleteOrder');
    Route::post('/order/delete','Admin\OrderController@destroy')->name('destroyOrder');

//  Danh sacsh nguoi dung
    Route::get('/user/add','Admin\UserController@add')->name('addUser');

    // ...

//  Route Anh
    Route::post('/upload', 'Admin\AdminController@uploadImage');

    Route::post('/deleteImage', 'Admin\AdminController@deleteImage')->name('deleteImage');

//});