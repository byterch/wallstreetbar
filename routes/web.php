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
    return view('welcome');
});

Route::get('/categories/list', ['uses' => 'CategoriesController@index']);
Route::get('/categories/create', ['uses' => 'CategoriesController@create']);
Route::post('/categories/save', ['uses' => 'CategoriesController@save']);
Auth::routes();
Route::resource('/products', 'ProductController');

Route::get('/home', 'HomeController@index')->name('home');
