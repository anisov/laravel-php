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
Route::group([], function () {
    Auth::routes();
    Route::get('/', 'Main@index')->name('index');
    Route::get('/order', 'OrdersController@index')->name('orders');
    Route::post('/buy-products', 'OrdersController@buy')->name('products-buy');


    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/{slug}', 'NewsController@artical')->name('artical');


    Route::get('/category/{slug}', 'CategoryController@category')->name('category');
    Route::get('/product/{slug}', 'ProductController@product')->name('product');
    Route::get('/product/cart/{product_id}', 'ProductController@addToCart')->name('add-cart');

    Route::get('/faker', 'Main@faker');

    Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
});


//Admin
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
    Route::get('/categories', 'Admin\CategoryController@index')->name('admin-categories');
    Route::get('/category/edit/{category_id}', 'Admin\CategoryController@edit')->name('admin-category');
    Route::post('/category/update/{category_id}', 'Admin\CategoryController@update')->name('admin-category-update');
    Route::get('/category/create', 'Admin\CategoryController@create')->name('admin-category-create');
    Route::post('/category/add', 'Admin\CategoryController@add')->name('admin-category-add');
    Route::get('/category/delete/{category_id}', 'Admin\CategoryController@delete')->name('admin-category-delete');

    Route::get('/products', 'Admin\ProductController@index')->name('admin-products');
    Route::get('/product/edit/{category_id}', 'Admin\ProductController@edit')->name('admin-product');
    Route::post('/products/update/{category_id}', 'Admin\ProductController@update')->name('admin-product-update');
    Route::get('/product/create', 'Admin\ProductController@create')->name('admin-product-create');
    Route::post('/product/add', 'Admin\ProductController@add')->name('admin-product-add');
    Route::get('/product/delete/{category_id}', 'Admin\ProductController@delete')->name('admin-product-delete');

    Route::get('/mails', 'Admin\adminMailController@index')->name('admin-emails');
    Route::get('/mail', 'Admin\adminMailController@create')->name('admin-email-create');
    Route::post('/add', 'Admin\adminMailController@add')->name('admin-email-add');
    Route::get('/mail/delete/{mail_id}', 'Admin\adminMailController@delete')->name('admin-email-delete');

});

Route::get('/{page_url}', 'FlatPagesController@index');



//Route::get('/product/cart/{slug}','ProductController@addToCart')->name('add-cart');
//Route::get('/product/{slug}','ProductController@product')->name('product');