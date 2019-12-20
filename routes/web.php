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
//Route::get('admin/pages/about', 'AdminPagesController@pagesAbout')->name('admin.about_page_content');
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
Route::get('admin/pages/home', 'HomePageController@index')->name('admin.home.page');
Route::post('admin/pages/home', 'HomePageController@store')->name('admin.home.save');
//home page update
Route::get('admin/edit/home/{id}', 'HomePageController@edit')->name('admin.edit.homepage-content');
Route::patch('admin/edit/home/{id}', 'HomePageController@update')->name('admin.homepage.update');



//about page
Route::get('admin/pages/about', 'AboutPageController@index')->name('admin.about_page_content');
Route::post('admin/pages/about', 'AboutPageController@store')->name('admin.about_page_content.save');
//about page update
Route::get('admin/edit/about/{id}', 'AboutPageController@edit')->name('admin.edit.about_page_content');
Route::patch('admin/edit/about/{id}', 'AboutPageController@update')->name('admin.about_page_content.update');


//sales rep area
Route::get('admin/pages/salesRep', 'SalesRepPageController@index')->name('admin.salesRep_area');
Route::post('admin/pages/SalesRep', 'SalesRepPageController@store')->name('admin.salesRep_area.save');
//sales rep area update
Route::get('admin/edit/salesRep/{id}', 'SalesRepPageController@edit')->name('admin.edit.salesRep_content');
Route::patch('admin/edit/salesRep/{id}', 'SalesRepPageController@update')->name('admin.salesRep_content.update');



//product page
Route::get('admin/pages/products', 'ProductPageController@index')->name('admin.products_page_content');
Route::post('admin/pages/products', 'ProductPageController@store')->name('admin.products_page_content.save');
//product page update
Route::get('admin/edit/products/{id}', 'ProductPageController@edit')->name('admin.edit.products_content');
Route::patch('admin/edit/products/{id}', 'ProductPageController@update')->name('admin.products_content.update');




//contact page
Route::get('admin/pages/contact', 'ContactPageController@index')->name('admin.contact_page');
Route::post('admin/pages/contact', 'ContactPageController@store')->name('admin.contact_page.save');
//contact page update
Route::get('admin/edit/contact/{id}', 'ContactPageController@edit')->name('admin.edit.contact_content');
Route::patch('admin/edit/contact/{id}', 'ContactPageController@update')->name('admin.edit.contact_update');




