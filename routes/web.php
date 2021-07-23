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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $caty = Category::all();
    if(Auth::user())
    {
        return view('home',compact('caty'));
    }
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('step2','RegisterStep2Controller');

Route::resource('profile','ProfileController');

Route::resource('books','BookController');

Route::resource('sharing','SharingController');

Route::get('/search%books', 'SearchController@getBook')->name('search.books');

Route::get('/search%authors', 'SearchController@getAuthor')->name('search.authors');



