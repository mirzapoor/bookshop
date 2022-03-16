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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('/pakhsh', 'PakhshController');
    Route::resource('/writer','WriterController');
    Route::resource('/translator','TranslatorsController');
    Route::resource('/chaphkoneh','ChaphkonehController');


//     Route::get('index', function () {
//         return view('admin.index');
//     });
//     Route::get('books', function () {
        
//     });
 }); 