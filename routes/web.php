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

Route::get('/', 'PageController@index');
Route::get('/usluge', 'PageController@usluge');
Route::get('/redovno-odrzavanje', 'PageController@odrzavanje');
Route::get('/farbarski-radovi', 'PageController@farbarskiRadovi');
Route::get('/zimovnik', 'PageController@zimovnik');
Route::get('/slepovanje', 'PageController@slepovanje');
Route::get('/galerija', 'PageController@galerija');
