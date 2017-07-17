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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['as'=>'dashboard','uses'=>'Admin\DashboardController@dashboard']);
Route::get('admin/type-product',['as'=>'admin/type-product','uses'=>'Admin\TypeProductController@getListTypeProduct']);
Route::get('admin/type-product/add',['as'=>'admin/type-product/add','uses'=>'Admin\TypeProductController@getAddTypeProduct']);
Route::post('admin/type-product/add',['as'=>'admin/type-product/add','uses'=>'Admin\TypeProductController@postAddTypeProduct']);
Route::get('admin/type-product/edit/{id}',['as'=>'admin/type-product/edit','uses'=>'Admin\TypeProductController@getEditTypeProduct']);
Route::post('admin/type-product/edit',['as'=>'admin/post-type-product/edit','uses'=>'Admin\TypeProductController@postEditTypeProduct']);

Route::get('admin/type-product/delete/{id}',['as'=>'admin/type-product/delete','uses'=>'Admin\TypeProductController@delete']);
//Product
Route::get('admin/product',['as'=>'admin/product','uses'=>'Admin\ProductController@getProduct']); 
Route::get('admin/product/add',['as'=>'admin/product/add','uses'=>'Admin\ProductController@getAddProduct']); 
Route::post('admin/product/add',['as'=>'admin/product/add','uses'=>'Admin\ProductController@postAddProduct']); 
Route::get('admin/product/edit/{id}',['as'=>'admin/product/edit','uses'=>'Admin\ProductController@getEditProduct']); 
Route::post('admin/product/edit/',['as'=>'admin/post-product/edit','uses'=>'Admin\ProductController@postEditProduct']); 
Route::get('admin/product/delete/{id}',['as'=>'admin/product/delete','uses'=>'Admin\ProductController@delete']); 
//Slide
Route::get('admin/slide',['as'=>'slide','uses'=>'Admin\SlideController@getSlide']);
Route::get('admin/slide/add',['as'=>'admin/slide/add','uses'=>'Admin\SlideController@getAddSlide']);
Route::post('admin/slide/add',['as'=>'admin/slide/add','uses'=>'Admin\SlideController@postAddSlide']);

Route::get('/home',['as'=>'home','uses'=>'HomeController@getHome']);
Route::get('/type-product',['as'=>'type-product','uses'=>'HomeController@getTypeProduct']);
Route::get('/product',['as'=>'product','uses'=>'HomeController@getProduct']);
