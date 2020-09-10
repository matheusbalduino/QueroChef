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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('client')->group(function () {
    route::get('create', 'UserClientController@create')->name('client.create');
    route::post('store', 'UserClientController@store')->name('client.store');
    route::get('login', 'UserClientController@login')->name('client.login');
    route::post('validatelogin', 'UserClientController@validatelogin')->name('client.validatelogin');
    route::any('show/{email}', 'UserClientController@show')->name('client.show');
    route::any('logout', 'UserClientController@logout')->name('client.logout');
});

Route::prefix('chef')->group(function () {
    route::get('create', 'ChefRegisterController@create')->name('chef.create');
    route::post('store', 'ChefRegisterController@store')->name('chef.store');
    route::get('login', 'ChefRegisterController@login')->name('chef.login');
    route::post('validatelogin', 'ChefRegisterController@validatelogin')->name('chef.validatelogin');
    route::any('show/{email}', 'ChefRegisterController@show')->name('chef.show');
    route::any('logout', 'ChefRegisterController@logout')->name('chef.logout');
});
