<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PageController@index')->name('comics');
Route::get('single_comics', 'PageController@comics')->name('single_comics');


Auth::routes();

//Admin group routes
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group( function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('comics', 'ComicController');  
});
