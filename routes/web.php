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
Route::get('/admin/users/add', 'HomeController@createUser')->name('admin.users.add');
Route::post('/admin/users/add', 'HomeController@storeUser')->name('admin.users.store');
Route::get('/admin/foods/list', 'HomeController@getAllFood')->name('admin.foods.list');
Route::get('/admin/foods/add', 'HomeController@createFood')->name('admin.foods.add');
Route::post('/admin/foods/add', 'HomeController@storeFood')->name('admin.foods.store');
Route::get('/admin/users/{id}/edit', 'HomeController@editUser')->name('admin.users.edit');
Route::post('/admin/users/{id}/update', 'HomeController@updateUser')->name('admin.users.update');
Route::get('/admin/users/{id}/delete', 'HomeController@deleteUser')->name('admin.users.delete');
Route::get('/admin/users/changePassword', 'HomeController@showChangePasswordForm')->name('admin.users.form');
Route::post('/admin/users/changePassword', 'HomeController@changePassword')->name('admin.users.change-password');
