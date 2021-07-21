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

use Author\Models\Category;

Route::get('/', function () {
    $caty = Category::all();
    return view('home',compact('caty'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('step2','RegisterStep2Controller');

Route::resource('profile','ProfileController');
