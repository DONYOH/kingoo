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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::match(['get', 'post'], '', 'App\Http\Controllers\SiteController@accueil');
Route::match(['get'], 'contact', 'App\Http\Controllers\SiteController@contact')->name('contact');
Route::match(['get'], 'accueil', 'App\Http\Controllers\SiteController@index')->name('accueil');
Route::match(['get'], 'Transports', 'App\Http\Controllers\SiteController@Transports')->name('Transports');
Route::match(['get'], 'Doveenam', 'App\Http\Controllers\SiteController@Doveenam')->name('Doveenam');
Route::match(['get'], 'KifeKoi', 'App\Http\Controllers\SiteController@KifeKoi')->name('KifeKoi');
