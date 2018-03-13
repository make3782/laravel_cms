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


Route::get('/', ['as' => 'root', 'uses' => 'HomeController@index']);
Route::get('/category/{categorySlug}', ['as' => 'category', 'uses' => 'CategoryController@index']);
Route::get('/article/{articleSlug}',   ['as' => 'article',  'uses' => 'ArticleController@index']);
