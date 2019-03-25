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

Route::get('/', 'PageController@main');

Route::post('/', 'MessagesController@send');
Route::get('/MFLQv3ZT', 'MessagesController@show');
Route::get('/MFLQv3ZT/{id}', 'MessagesController@remove');

Route::get('/search', function(){
    return view('search');
});








