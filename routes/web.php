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
Route::post('contactsUs', 'ContactUsController@store')->name('contactUs.save');

// admin page routes
Route::get('admin', 'AdminPagesController@admin')->name('admin.index');

//home page
Route::get('admin/pages/Indexhome', 'AdminPagesController@indexHome')->name('admin.home.index');
Route::get('admin/pages/home/create', 'HomePageController@index')->name('admin.home.create');
Route::post('admin/pages/home', 'HomePageController@store')->name('admin.home.save');
//home page update
Route::get('admin/home/{id}/edit', 'HomePageController@edit')->name('admin.edit.homepage-content');
Route::patch('admin/home/{id}/edit', 'HomePageController@update')->name('admin.homepage.update');
//home page delete
Route::delete('admin/home/{id}/delete', 'HomePageController@destroy')->name('admin.homepage.delete');



//about page
Route::get('admin/pages/indexAbout', 'AdminPagesController@indexAbout')->name('admin.about.index');
Route::get('admin/pages/about/create', 'AboutPageController@index')->name('admin.about.create');
Route::post('admin/pages/about', 'AboutPageController@store')->name('admin.about_page_content.save');
//about page update
Route::get('admin/about/{id}/edit', 'AboutPageController@edit')->name('admin.edit.about_page_content');
Route::patch('admin/about/{id}/edit', 'AboutPageController@update')->name('admin.about_page_content.update');
//about page delete
Route::delete('admin/about/{id}/delete', 'AboutPageController@destroy')->name('admin.about.delete');


//sales rep area
Route::get('admin/pages/IndexsalesRep', 'AdminPagesController@indexSalesRep')->name('admin.salesRep.index');
Route::get('admin/pages/salesRep/create', 'SalesRepPageController@index')->name('admin.salesRep.create');
Route::post('admin/pages/SalesRep', 'SalesRepPageController@store')->name('admin.salesRep_area.save');
//sales rep area update
Route::get('admin/salesRep/{id}/edit', 'SalesRepPageController@edit')->name('admin.edit.salesRep_content');
Route::patch('admin/salesRep/{id}/edit', 'SalesRepPageController@update')->name('admin.salesRep_content.update');
//sales rep area delete
Route::delete('admin/salesRep/{id}/delete', 'SalesRepPageController@destroy')->name('admin.salesRep.delete');



//product page
Route::get('admin/pages/indexProducts', 'AdminPagesController@indexProducts')->name('admin.products.index');
Route::get('admin/pages/products/add', 'ProductPageController@index')->name('admin.products.add');
Route::post('admin/pages/products', 'ProductPageController@store')->name('admin.products_page_content.save');
//product page update
Route::get('admin/products/{id}/edit', 'ProductPageController@edit')->name('admin.edit.products_content');
Route::patch('admin/products/{id}/edit', 'ProductPageController@update')->name('admin.products_content.update');
//product page delete
Route::delete('admin/products/{id}/delete', 'ProductPageController@destroy')->name('admin.products.delete');



//contact page
Route::get('admin/pages/indexContact', 'AdminPagesController@indexContact')->name('admin.contact.index');
Route::get('admin/pages/contact', 'ContactPageController@index')->name('admin.contact.add');
Route::post('admin/pages/contact', 'ContactPageController@store')->name('admin.contact_page.save');
//contact page update
Route::get('admin/contact/{id}/edit', 'ContactPageController@edit')->name('admin.edit.contact_content');
Route::patch('admin/contact/{id}/edit', 'ContactPageController@update')->name('admin.edit.contact_update');
//contact page delete
Route::delete('admin/contact/{id}/delete', 'ContactPageController@destroy')->name('admin.contact.delete');





