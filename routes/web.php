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
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('food', 'FoodController@index()')->name('index');


Route::get('/admin/users/list', 'AdminController@getAllUser')->name('admin.users.list');
Route::get('/admin/users/add', 'AdminController@createUser')->name('admin.users.add');
Route::post('/admin/users/add', 'AdminController@storeUser')->name('admin.users.store');
Route::get('/admin/foods/list', 'FoodController@getAllFood')->name('admin.foods.list');
Route::get('/admin/foods/add', 'FoodController@createFood')->name('admin.foods.add');
Route::post('/admin/foods/add', 'FoodController@storeFood')->name('admin.foods.store');
Route::get('/admin/foods/{id}/edit', 'FoodController@editFood')->name('admin.foods.edit');
Route::post('/admin/foods/{id}/edit', 'FoodController@updateFood')->name('admin.foods.update');
Route::get('/admin/foods/{id}/destroy', 'FoodController@destroyFood')->name('admin.foods.destroy');
Route::get('/admin/users/{id}/edit', 'AdminController@editUser')->name('admin.users.edit');
Route::post('/admin/users/{id}/update', 'AdminController@updateUser')->name('admin.users.update');
Route::get('/admin/users/{id}/delete', 'AdminController@deleteUser')->name('admin.users.delete');
Route::get('/admin/users/changePassword', 'AdminController@showChangePasswordForm')->name('admin.users.form');
Route::post('/admin/users/changePassword', 'AdminController@changePassword')->name('admin.users.change-password');

