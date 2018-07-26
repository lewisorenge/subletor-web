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

Route::get('/search-results/{slug?}', 'SearchController@search');

Route::get('/', 'PagesController@home');

// Verify emails
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

// Adverts
Route::resource('advert', 'AdvertController');

Route::get('/offices', 'PagesController@offices');
Route::get('/details', 'PagesController@details');

Route::get('/how-to-host', 'PagesController@host');
Route::get('/how-it-works','PagesController@works')->name('how-it-works');
Route::get('/help','PagesController@help');

// Mailing list
Route::resource('mailing', 'MailingListController');

// User Account
Route::get('/account', 'AccountController@index')->name('account');
Route::get('/account/edit', 'AccountController@edit');
Route::get('/account/bookinghistory', 'AccountController@bookinghistory');


Route::get('auto-complete-city', 'AutoCompleteController@index')->name('auto-complete-city');

Auth::routes();

// Reviews
Route::resource('users/property-reviews', 'ReviewsController');

// Booking
Route::resource('users/booking', 'BookingController');

Route::resource('users/property', 'PropertyController');
Route::get('/account', 'AccountController@index')->name('account');
Route::get('/account/edit', 'AccountController@edit');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::resource('/users', 'UsersController');
Route::get('/home', 'HomeController@index')->name('home');
