<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about', "PagesController@about");
Route::post('/updateHome', 'PagesController@updateHome')->middleware('admin');
Route::post('/updateAbout', 'PagesController@updateAbout')->middleware('admin');
// Route::get('/player', 'ProfileController@index');
//Route::get('/blog', 'PagesController@blog');

Route::resource('blog' ,'BlogController');
Route::resource('players' ,'PlayerController');

// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index');