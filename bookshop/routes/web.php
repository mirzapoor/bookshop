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
Route::get('/','HomeController@index');
Route::get('/category/{category}','HomeController@category');
Route::get('/book/{url}','HomeController@single');
Route::post('/cart','HomeController@addCart');
Route::get('/shop','HomeController@shop');


Auth::routes();

Route::prefix('admin')->group(function () {
    Route::resource('/pakhsh','PakhshController');
    Route::resource('/writer','WriterController');
    Route::resource('/translator','TranslatorsController');
    Route::resource('/chaphkoneh','ChaphkonehController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/users', 'UserController');
    Route::resource('/books', 'BookController');
    Route::get('index', function () {
        return view('admin.index');
    });

 }); 