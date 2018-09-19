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

// [ROUTE] HOME 
Route::get('/', 'FrontController@index');

// [ROUTE] STAGE
Route::get('/stage', 'FrontController@stage');

// [ROUTE] FORMATION
Route::get('/formation', 'FrontController@formation');

// [ROUTE] POST 
Route::get('/post/{id}', 'FrontController@show') -> where(['id' => '[0-9]+']);

// [ROUTE] CONTACT
Route::get('/contact', 'FrontController@contact');

// [ROUTE] ECHO RESULTS SEARCH
Route::get('/search', 'FrontController@search');

// [ROUTE] SEARCH BY HOME
Route::post('/search', 'FrontController@find');

// **************** DASHBOARD **************** \\

Route::resource('dashboard', 'PostController')->middleware('auth');

// [ROUTE] CREAT POST
Route::get('post/create', 'PostController@create')->middleware('auth');

// [ROUTE] SEND POST
Route::post('post', 'PostController@store')->middleware('auth');

// [ROUTE] EDIT POST
Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');

// Envoie du form d'édition d'un post
Route::post('post/edit/{id}', 'PostController@update')->name('post.update');

// [ROUTE] DELETE POST
Route::get('/post/delete/{id}','PostController@destroy')->name('post.destroy');


Auth::routes();

