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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/historik', 'PagesController@historik');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('edit', 'SettingsController@edit');

//Route::post('edit', [
//    'uses' => 'SettingsController@update'
//]);

Route::post('/edit', 'SettingsController@update');

//Route::resource('edit', 'SettingsController');

