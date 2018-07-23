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
    return view('auth.login');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'RoleController@about');

Route::get('/userList','TeamLeaderController@index');
Route::get('/edit/{id}','TeamLeaderController@edit');
Route::get('/delete/{id}','TeamLeaderController@delete');


Route::resource('/project','ProjectController');










