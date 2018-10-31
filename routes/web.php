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
  return redirect()->route('result');
});
Route::name('user.')->group(function(){
  Route::view('/user_input', 'pages.user_input')->name('input');
  Route::view('/user_input2', 'pages.user_input2')->name('input2');
  Route::post('/user_inputPost', 'UserController@user_inputPost')->name('inputPost');
  Route::put('/user_inputPost2', 'UserController@user_inputPost')->name('inputPost2');
});
Route::get('/data_result', 'UserController@data_result')->name('result');
