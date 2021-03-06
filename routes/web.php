<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin{id}', 'App\Http\Controllers\AdminController@all')->name('admin.all')->middleware('admin');
Route::patch('/admin{id}/update', 'App\Http\Controllers\ApplicationController@update')->name('admin.update')->middleware('admin');

//Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('applications', 'App\Http\Controllers\ApplicationController')->middleware('auth');
Route::post('applications', 'App\Http\Controllers\ApplicationController@store')->name('application.store')->middleware('auth');
Route::delete('applications/{id}', 'App\Http\Controllers\ApplicationController@destroy')->name('application.delete')->middleware('auth');



Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('category.list')->middleware('admin');
Route::post('/categories', 'App\Http\Controllers\CategoryController@store')->name('category.store')->middleware('admin');
Route::delete('/categories/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.delete')->middleware('admin');
Route::get('/categories/form', 'App\Http\Controllers\CategoryController@form')->name('category.page')->middleware('admin');





