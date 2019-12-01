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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin',function(){
        return view('admin.index');
    });
});

/*Route::get('/admin', 'HomeController@index');*/
Route::resource('/admin/users',"AdminUsersController");
Route::resource('/admin/products','AdminProductsController');
Route::resource('/admin/categories','AdminCategoriesController');
Route::resource('/admin/brands','AdminBrandsController');
Route::resource('/admin/sizes','AdminSizesController');
