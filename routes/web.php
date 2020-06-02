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
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/logout', 'HomeController@logout')->name('admin.logout');
Route::get('/categories', 'backend\CategoryController@Categories')->name('Categories');
Route::post('/store/category', 'backend\CategoryController@insert')->name('store.category');
Route::get('/delete/category/{id}','backend\CategoryController@destory')->name('delete.category');
Route::get('/edit/category/{id}','backend\CategoryController@edit');
Route::post('/update/category{id}', 'backend\CategoryController@update')->name('update.category');

// subcategories
Route::get('/subcategories', 'backend\SubcategoryController@subcategories')->name('subcategories');
Route::post('/store/subcategory', 'backend\SubcategoryController@insert')->name('store.subcategory');
Route::get('/delete/subcategory/{id}','backend\SubcategoryController@destory')->name('delete.subcategory');
Route::get('/edit/subcategory/{id}','backend\SubcategoryController@edit')->name('edit.subcategory');
Route::post('/update/subcategory{id}', 'backend\SubcategoryController@update')->name('update.subcategory');

// district
Route::get('/district', 'backend\DistrictController@district')->name('district');
Route::post('/store/district', 'backend\DistrictController@insert')->name('store.district');
Route::get('/delete/district/{id}','backend\DistrictController@destory')->name('delete.district');
Route::get('/edit/district/{id}','backend\DistrictController@edit')->name('edit.district');
Route::post('/update/district{id}', 'backend\DistrictController@update')->name('update.district');

// subdistricts 
Route::get('/subdistrict', 'backend\SubdistrictController@subdistrict')->name('subdistrict');
Route::post('/store/subdistrict', 'backend\SubdistrictController@insert')->name('store.subdistrict');
Route::get('/delete/subdistrict/{id}','backend\SubdistrictController@destory')->name('delete.subdistrict');
Route::get('/edit/subdistrict/{id}','backend\SubdistrictController@edit')->name('edit.subdistrict');
Route::post('/update/subdistrict/{id}', 'backend\SubdistrictController@update')->name('update.subdistrict');


//json data multiple dependency
Route::get('/get/subcategory/{category_id}', 'backend\PostController@getsubcategory');
Route::get('/get/subdistrict/{district_id}', 'backend\PostController@getsubdistrict');

// post   
Route::get('/add/post', 'backend\PostController@create')->name('add.post');
Route::post('/store/post', 'backend\PostController@store')->name('store.post');
Route::get('/all/post', 'backend\PostController@index')->name('all.post');
Route::get('/delete/post/{id}','backend\PostController@delete')->name('delete.post');
Route::get('/edit/post/{id}','backend\PostController@edit')->name('edit.post');
Route::post('/update/post/{id}', 'backend\PostController@update')->name('update.post');