<?php

use Illuminate\Support\Facades\Route;


Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.post.login');
Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
Route::group(['middleware' => ['admin']], function () {
  Route::get('/', 'Admin\AdminController@index');

  Route::resource('settings', 'Admin\SettingsController');
  Route::get('/settings/{setting}', 'Admin\SettingsController@edit')->name('settings.edit');
  Route::post('/settings/{setting}', 'Admin\SettingsController@update')->name('settings.update');

  Route::resource('aboutus', 'Admin\AboutController');
  Route::put('aboutus/status/{id}', 'Admin\AboutController@status')->name('statusAboutus');

  Route::resource('service', 'Admin\ServiceController');
  Route::put('service/status/{id}', 'Admin\ServiceController@status')->name('statusService');

  Route::resource('client', 'Admin\ClientsController');
  Route::put('client/status/{id}', 'Admin\ClientsController@status')->name('statusClient');

  Route::resource('project', 'Admin\ProjectController');
  Route::put('project/status/{id}', 'Admin\ProjectController@status')->name('statusProject');

  Route::resource('homeBanner', 'Admin\HomeBannerController');
  Route::put('homeBanner/status/{id}', 'Admin\HomeBannerController@status')->name('statusHomeBanner');

  Route::resource('workDone', 'Admin\WorkDoneController');
  Route::put('workDone/status/{id}', 'Admin\WorkDoneController@status')->name('statusWorkDone');
});
