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
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('food', 'FoodController@index()')->name('index');
Route::get('/admin/users/list', 'HomeController@getAllUser')->name('admin.users.list');
Route::get('/admin/foods/list', 'HomeController@getAllFood')->name('admin.foods.list');
Route::get('/admin/foods/add', 'HomeController@createFood')->name('admin.foods.add');
Route::post('/admin/foods/add', 'HomeController@storeFood')->name('admin.foods.store');
