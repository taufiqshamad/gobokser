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

Route::view('/', 'home')->name('home');
Route::get('services','BookingController@services')->name('services');
Route::get('services/{type}', 'BookingController@bookingForm')->name('bookingForm');
Route::post('book', 'BookingController@book')->name('book');
// Route::view('lokasi','lokasi')->name('lokasi');
Route::view('bengkel','bengkel')->name('bengkel');
Route::view('booking-complete','bookingComplete')->name('bookingComplete');
Route::get('account','UserController@account')->name('account');

Route::get('admin/','AdminController@home')->name('admin.home');
Route::get('admin/booking/{id}', 'AdminController@showBooking')->name('admin.showBooking');
Route::post('admin/booking/{id}/prosesAntrian', 'AdminController@prosesAntrian')->name('admin.prosesAntrian');
Route::post('admin/booking/{id}/complete', 'AdminController@completeBooking')->name('admin.completeBooking');

Route::get('admin/login','AdminController@login')->name('admin.login');
Route::post('admin/login', 'AdminController@auth')->name('admin.auth');
Route::post('admin/logout', 'AdminController@logout')->name('admin.logout');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
