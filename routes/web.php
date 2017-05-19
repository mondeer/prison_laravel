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

Route::get('/prisoner/create', 'PrisonerController@create');

Route::post('/prisoner/create', 'PrisonerController@store');

Route::get('/prisoner/view', 'PrisonerController@view');

Route::get('/prisoner/edit/{id}', "PrisonerController@edit");

Route::put('/prisoner/edit/{id}', "PrisonerController@update");

Route::delete('/prisoner/delete/{id}', "PrisonerController@destroy");

Route::get('/prisoner/release', 'PrisonerController@release');




// Route::resource('/prisoner', 'PrisonerController');

Auth::routes();

Route::get('/home', 'HomeController@index');
