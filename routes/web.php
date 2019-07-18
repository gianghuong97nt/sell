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
    Route::get('/changepassword','Admin\AdminController@changePassword')->name('info');

//  Danh sach san pham
    Route::get('/product','Admin\ProductController@product')->name('product');
//  Danh sach don hang
    Route::get('/order','Admin\OrderController@oder')->name('order');
//  Danh sacsh nguoi dung
    Route::get('/user','Admin\UserController@user')->name('user');

    // ...

//  Route Anh
    Route::post('/upload', 'Admin\AdminController@uploadImage');

    Route::post('/deleteImage', 'Admin\AdminController@deleteImage')->name('deleteImage');

//});