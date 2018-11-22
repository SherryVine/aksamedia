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
  return redirect()->route('user.result');
});

Route::name('user.')->group(function(){
  Route::view('/user/input', 'pages.user_input')->name('input');
  Route::view('/user/input2', 'pages.user_input2')->name('input2');
  Route::post('/user/inputPost', 'UserController@user_inputPost')->name('inputPost');
  Route::put('/user/inputPost2', 'UserController@user_inputPost')->name('inputPost2');
  Route::get('/user/data_result', 'UserController@data_result')->name('result');
});

Route::name('product.')->group(function(){
  Route::get('/product/input', 'ProductController@index')->name('input');
  Route::post('/product/inputPost', 'ProductController@product_inputPost')->name('inputPost');
  Route::get('/product/data_result', 'ProductController@data_result')->name('result');
});

Route::name('article.')->group(function(){
  Route::get('/article/input', 'ArticleController@index')->name('input');
  Route::post('/article/inputPost', 'ArticleController@article_inputPost')->name('inputPost');
  Route::get('/article/article_data', 'ArticleController@article_data')->name('article_result');
  Route::get('/article/category_data', 'ArticleController@category_data')->name('category_result');
});
