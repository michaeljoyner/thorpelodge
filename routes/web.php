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

Route::get('/', 'PagesController@homepage');
Route::get('weddings', 'PagesController@weddings');
Route::get('accommodation', 'PagesController@accommodation');
Route::get('functions', 'PagesController@functions');
Route::get('gallery', 'PagesController@gallery');

Route::get('contact', 'ContactController@show');
Route::post('contact', 'ContactController@store');
