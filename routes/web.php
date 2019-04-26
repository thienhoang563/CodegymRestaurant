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
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//Route::get('/order-table', 'HomeController@orderTable')->name('home.order-table');
Route::get('/order-table', 'HomeController@orderTable')->name('home.order-table');
Route::post('/order-table', 'HomeController@confirmTable')->name('home.confirm-table');
Route::get('/search', 'HomeController@findFood')->name('home.search');

Route::get('food', 'FoodController@index()')->name('index');
Route::get('/contact', function (){
   return view('contact-page.contact-page');
});
Route::get('/food-page', 'HomeController@getAllFood')->name('food-page');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/', 'AdminController@index')->name('home');
    Route::prefix('order')->group(function (){
        Route::get('/', 'AdminController@getAllTable')->name('admin.order-table.list');
        Route::get('/{id}/destroy', 'AdminController@destroyTable')->name('admin.order-table.destroy');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', 'AdminController@getAllUser')->name('admin.users.list');
        Route::get('/add', 'AdminController@createUser')->name('admin.users.add');
        Route::post('/add', 'AdminController@storeUser')->name('admin.users.store');
        Route::get('/{id}/edit', 'AdminController@editUser')->name('admin.users.edit');
        Route::post('/{id}/update', 'AdminController@updateUser')->name('admin.users.update');
        Route::get('/{id}/delete', 'AdminController@deleteUser')->name('admin.users.delete');
        Route::get('/changePassword', 'AdminController@showChangePasswordForm')->name('admin.users.form');
        Route::post('/changePassword', 'AdminController@changePassword')->name('admin.users.change-password');
    });
    Route::prefix('foods')->group(function () {
        Route::get('/', 'FoodController@getAllFood')->name('admin.foods.list');
        Route::get('/add', 'FoodController@createFood')->name('admin.foods.add');
        Route::post('/add', 'FoodController@storeFood')->name('admin.foods.store');
        Route::get('/{id}/edit', 'FoodController@editFood')->name('admin.foods.edit');
        Route::post('/{id}/edit', 'FoodController@updateFood')->name('admin.foods.update');
        Route::get('/{id}/destroy', 'FoodController@destroyFood')->name('admin.foods.destroy');
    });
});

Route::get('/post','PostController@getPost')->name('post.list');
Route::get('/show/{id}','FoodController@show')->name('food.show');
Route::get('/search','HomeController@search')->name('food.search');
