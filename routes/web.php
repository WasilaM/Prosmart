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

// Route::get('/', function () {
//     return view('base.baseUser');
// });

Auth::routes();

Route::get('/', 'Front\HomeController@home')->name('home');

Route::get('/about', 'Front\HomeController@about')->name('front.about.index');

Route::get('/service', 'Front\HomeController@service')->name('front.service.index');
Route::get('/service/{service}', 'Front\HomeController@serviceShow')->name('front.service.show');

Route::get('/contact', 'Front\HomeController@contact')->name('front.contact.index');

Route::get('/films', 'Front\HomeController@films')->name('front.films.index');
