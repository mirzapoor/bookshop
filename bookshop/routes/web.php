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
Route::post('/add','HomeController@add');
Route::post('/remove','HomeController@delete');
Route::post('/empty','HomeController@empty_cart');
Route::get('/shop','HomeController@shop');
Route::post('/comment','HomeController@comment');
Route::post('/search','HomeController@search'); 
Route::get('/about', 'HomeController@about');


Route::get('/buy','HomeController@buy');
Route::post('/buyback','HomeController@buypost');

Route::get('/checkout','HomeController@checkout'); 
Route::get('/checkout-step2','HomeController@checkoutstep2');
Route::post('/checkout','HomeController@savecheckout');
Route::get('/checkout-step3','HomeController@checkoutstep3');
Route::get('/success/sefaresh/{id}','HomeController@success');
 


Route::prefix('admin')->group(function () {
    Route::resource('/ticket','TicketController');
    Route::post('/ticket/ansewer','TicketController@ansewer');
	Route::get('/ticket/ansewer/{id}','TicketController@ansewerget');
    Route::resource('/pakhsh','PakhshController');
    Route::resource('/writer','WriterController');
    Route::resource('/translator','TranslatorsController');
    Route::resource('/chaphkoneh','ChaphkonehController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/users', 'UserController');
    Route::resource('/sefareshs','SefareshsController');
	Route::get('/state/sefaresh/{idsefaresh}/{idstate}','SefareshsController@editstate');
    Route::resource('/books', 'BookController');
    Route::resource('/comments','CommentController');
	Route::get('/comments/success/{id}','CommentController@success');
    Route::get('index', function () {
        return view('admin.index');
    });

 }); 


 Route::group(['prefix'=>'user'], function()
{
	Route::get('/panel','UserPanelController@index');
	Route::resource('/ticket','UserPanelTicketController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');