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
Route::get('admin', 'AdminPagesController@admin')->name('admin.index');
Route::get('pagesAbout', 'AdminPagesController@pagesAbout')->name('admin.about_page_content');
Route::get('pagesProducts', 'AdminPagesController@pagesProducts')->name('admin.products_page_content');
//Route::get('pagesContact', 'AdminPagesController@pagesContact')->name('admin.contact_page');
Route::get('adminProducts', 'AdminPagesController@adminProducts')->name('admin.products');
Route::get('adminSalesRep', 'AdminPagesController@salesRep')->name('admin.salesRep');
Route::get('uploadsHomePage', 'AdminPagesController@uploadsHome')->name('admin.uploads.home');
Route::get('uploadsAboutPage', 'AdminPagesController@uploadsAbout')->name('admin.uploads.about');
Route::get('uploadsSalesRep', 'AdminPagesController@uploadsSalesRep')->name('admin.uploads.salesRep');
Route::get('uploadsProductsPage', 'AdminPagesController@uploadsProducts')->name('admin.uploads.products');
Route::get('uploadsContactPage', 'AdminPagesController@uploadsContact')->name('admin.uploads.contact');
//});

//home page
Route::get('admin/home', 'HomePageController@index')->name('admin.home.page');
Route::post('admin/home', 'HomePageController@store')->name('admin.home.save');

//about page
Route::get('pagesAbout', 'AboutPageController@index')->name('admin.about_page_content');
Route::post('pagesAbout', 'AboutPageController@store')->name('admin.about_page_content.save');

//sales rep area
Route::get('pagesSalesRep', 'SalesRepPageController@index')->name('admin.salesRep_area');
Route::post('pagesSalesRep', 'SalesRepPageController@store')->name('admin.salesRep_area.save');


//product page
Route::get('pagesProducts', 'ProductPageController@index')->name('admin.products_page_content');
Route::post('pagesProducts', 'ProductPageController@store')->name('admin.products_page_content.save');

//contact page
Route::get('pagesContact', 'ContactPageController@index')->name('admin.contact_page');
Route::post('pagesContact', 'ContactPageController@store')->name('admin.contact_page.save');



