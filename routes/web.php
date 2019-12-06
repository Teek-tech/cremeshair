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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('products', 'PagesController@products');
Route::get('contact', 'PagesController@contact');

// admin page routes
//Route::group(['namespace'=>'web', 'middlware'=>['auth']], function(){
Route::get('admin', 'AdminPagesController@admin');
Route::get('pagesAbout', 'AdminPagesController@pagesAbout');
Route::get('pagesProducts', 'AdminPagesController@pagesProducts');
Route::get('pagesContact', 'AdminPagesController@pagesContact');
Route::get('adminProducts', 'AdminPagesController@adminProducts');
Route::get('adminSalesRep', 'AdminPagesController@salesRep');
Route::get('adminCharts', 'AdminPagesController@adminCharts');
Route::get('adminTables', 'AdminPagesController@adminTables');
//});

Route::get('admin/home', 'HomePageController@index')->name('admin.home.page');
Route::post('admin/home', 'HomePageController@save')->name('admin.home.save');
