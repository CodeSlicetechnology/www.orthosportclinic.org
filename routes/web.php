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

Route::get('/', 'Website\WebsiteController@index')->name('/');
Route::get('about', 'Website\WebsiteController@about')->name('about');
Route::get('conditions-and-treatments', 'Website\WebsiteController@conditionsAndTreatments')->name('conditions-and-treatments');
Route::get('gallery', 'Website\WebsiteController@gallery')->name('gallery');
Route::get('contact', 'Website\WebsiteController@contact')->name('contact');

Auth::routes();

Route::get('register', function () {
    return abort(404);
})->name('register');

Route::get('login', function () {
    return abort(404);
})->name('login');

Route::get('/home', 'HomeController@index')->name('home');
