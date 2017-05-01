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
    return view('login');
});

Route::get('/prisonercreate', 'PrisonerController@create');

Route::post('/prisonercreate', 'PrisonerController@store');

Route::get('/prisonerview', 'PrisonerController@view');

Route::resource('/prisoner', 'PrisonerController');

Auth::routes();

Route::get('/home', 'HomeController@index');
