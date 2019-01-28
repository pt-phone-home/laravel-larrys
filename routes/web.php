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

Route::get('/', 'PagesController@index');
Route::get('/wood_cutting', 'PagesController@wood');
Route::get('/diy', 'PagesController@diy');
Route::get('/advice', 'PagesController@advice');
Route::get('/fuel', 'PagesController@fuel');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@sendEmail');
