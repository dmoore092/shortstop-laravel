<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'PagesController@index');
// Route::get('/about', "PagesController@about");
// Route::get('/conditioning', "PagesController@conditioning");
// Route::get('/drills', "PagesController@drills");
// Route::get('/recruiting', "PagesController@recruiting");
// Route::get('/performance', "PagesController@performance");

// Route::post('/updateHome', 'PagesController@updateHome')->middleware('admin');
// Route::post('/updateAbout', 'PagesController@updateAbout')->middleware('admin');
// // Route::get('/player', 'ProfileController@index');
// //Route::get('/blog', 'PagesController@blog');

// Route::resource('blog' ,'BlogController');
// Route::resource('players' ,'PlayerController');

// // Auth::routes();
// Auth::routes(['verify' => true]);

// Route::get('/dashboard', 'DashboardController@index');