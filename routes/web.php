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
})->name('home');

Route::get('/payments/create', 'PaymentController@show')->middleware('auth')->name('pay');
Route::post('payments/create', 'PaymentController@store')->name('paid');
Route::get('payments/received', 'UserNotificationsController@show')->name('received');

//Email
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

