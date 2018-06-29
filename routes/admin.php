<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
	'middleware' => 'auth',
	'prefix'     => 'admin'
], function(){

	/**  */
	Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

	/**  */
	Route::get('/notification', 'AdminController@notification')->name('admin.notification');
	Route::get('/notification/{direct_id}', 'AdminController@notificationDirect')->name('admin.notification.direct');

});