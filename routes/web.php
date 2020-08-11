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
    return view('fontend.index');
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


// setting
Route::get('/social/setting', 'backend\SettingController@social')->name('social.setting');
Route::post('/update/social/{id}', 'backend\SettingController@update')->name('update.social');

// seo
Route::get('/seo/setting', 'backend\SettingController@seo')->name('seo.setting');
Route::post('/update/seo/{id}', 'backend\SettingController@seoupdate')->name('update.seo');
// prayer
Route::get('/prayer/setting', 'backend\SettingController@prayer')->name('prayer.setting');
Route::post('/update/prayer/{id}', 'backend\SettingController@prayerupdate')->name('update.prayer');

// live tv
Route::get('/livetv/setting', 'backend\SettingController@livetv')->name('livetv.setting');
Route::post('/update/livetv/{id}', 'backend\SettingController@livetvupdate')->name('update.livetv');

Route::get('/active/livetv/{id}', 'backend\SettingController@activetv')->name('active.livetv');
Route::get('/deactive/livetv/{id}', 'backend\SettingController@deactivetv')->name('deactive.livetv');

// notice
Route::get('/notice/setup/', 'backend\SettingController@notice')->name('notice');
Route::post('/notice/update/{id}', 'backend\SettingController@noticeUpdate')->name('update.notice');

Route::get('/active/notice/{id}', 'backend\SettingController@activenotice')->name('active.notice');
Route::get('/deactive/notice/{id}', 'backend\SettingController@deactivenotice')->name('deactive.notice');

// website
Route::get('/important/website/', 'backend\SettingController@website')->name('website');
Route::post('/store/website/', 'backend\SettingController@store')->name('store.website');
Route::get('/delete/website/{id}','backend\SettingController@deleteWebsite')->name('delete.website');
Route::get('/edit/website/{id}','backend\SettingController@editWebsite')->name('edit.website');
Route::post('/update/website/{id}', 'backend\SettingController@websiteupdate')->name('update.website');
//settings
Route::get('/website/setting/', 'backend\SettingController@websetting')->name('website.setting');
Route::post('/update/websitesetting/{id}', 'backend\SettingController@websitesetting')->name('update.websitesetting');
//gallery
Route::get('/photo/gallery/', 'backend\GalleryController@photo')->name('photo');
Route::get('/video/gallery/', 'backend\GalleryController@video')->name('video');
Route::get('/delete/photo/{id}','backend\GalleryController@deletePhoto')->name('delete.photo');
Route::get('/edit/photo/{id}','backend\GalleryController@editPhoto')->name('edit.photo');
Route::post('/store/photo/', 'backend\GalleryController@storePhoto')->name('store.photo');
Route::post('/update/photo/{id}', 'backend\GalleryController@photoupdate')->name('update.photo');
Route::post('/store/video/', 'backend\GalleryController@storevideo')->name('store.video');
Route::get('/delete/video/{id}','backend\GalleryController@deleteVideo')->name('delete.video');
//ads
Route::get('/horizontal/ads/', 'backend\AdsController@horizontal')->name('horizontal.ads');
Route::post('/store/ads/', 'backend\AdsController@storeads')->name('store.ads');

//frontend
//language
Route::get('/lang/english/', 'frontend\ExtraController@english')->name('lang.english');
Route::get('/lang/bangla/', 'frontend\ExtraController@bangla')->name('lang.bangla');

//single post
Route::get('view-post/{id}/{slug}', 'frontend\ExtraController@singlepost');
Route::get('posts/{id}/{subcategory_bn}', 'frontend\ExtraController@allpost');
Route::get('post/{id}/{category_bn}', 'frontend\ExtraController@allpostcat');

Route::get('/get/subdistrict/{district_id}', 'frontend\ExtraController@getsubdistrict');
Route::get('/saradesh/news/', 'frontend\ExtraController@saradeshstore')->name('saradesh.news');

//user role
Route::get('/add/user/', 'HomeController@adduser')->name('add.user');
Route::post('/store/user/', 'HomeController@storeuser')->name('store.user');
Route::get('/all/user/', 'HomeController@alluser')->name('all.user');
Route::get('/edit/user/{id}','HomeController@editUser')->name('edit.user');
Route::post('/update/user/{id}','HomeController@updateUser')->name('update.user');


