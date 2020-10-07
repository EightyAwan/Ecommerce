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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

//Frontend 
Route::get('/', 'HomeController@home')->name('home');
Route::get('/product_detail/{id}', 'HomeController@product_detail')->name('product_details');


// Admin Panel

Route::get('/dashboard', 'AdminController@index')->name('admin');

// Add Category 
Route::get('/add-category', 'AdminController@AddCategory')->name('addcategory');
Route::post('/add-category', 'AdminController@StoreCategory')->name('storecategory');


Route::get('/edit-category/{id}', 'AdminController@EditCategory')->name('editcategory');


Route::post('/delete-category', 'AdminController@DeleteCategory')->name('deletecategory');


Route::post('/edited-category', 'AdminController@EditedCategory')->name('editedcategory');



Route::get('/show-category', 'AdminController@ShowCategory')->name('showcategory');




Route::get('/add-product', 'AdminController@AddProduct')->name('addproduct');
Route::post('/add-product', 'AdminController@StoreProduct')->name('storeproduct');


Route::get('/edit-product/{id}', 'AdminController@EditProduct')->name('editproduct');


Route::post('/delete-product', 'AdminController@DeleteProduct')->name('deleteproduct');


Route::post('/edited-product', 'AdminController@EditedProduct')->name('editedproduct');



Route::get('/show-product', 'AdminController@ShowProduct')->name('showproduct');

 