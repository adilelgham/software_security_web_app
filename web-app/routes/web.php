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
    return view('content.welcome');
})->name('welcome');

Route::get('/privacy', function () {
    return view('other.privacyverklaring');
})->name('privacy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/privacy', function () {
    return view('privacyDeclaration');
})->name('privacy');

Route::get('/profile', [
    'uses' => 'App\Http\Controllers\ProfielController@index',
    'as' => 'profile'
]);
Route::get('/editProfile', [
    'uses' => 'App\Http\Controllers\ProfielController@editProfile',
    'as' => 'editProfile'
]);

Route::post('/postEditProfile', [
    'uses' => 'App\Http\Controllers\ProfielController@postEditProfile',
    'as' => 'postEditProfile'
]);
Route::post('/deleteProfile', [
    'uses' => 'App\Http\Controllers\ProfielController@deleteProfile',
    'as' => 'deleteProfile'
]);

Route::get('/profile/export', [
    'uses' => 'App\Http\Controllers\UserController@export',
    'as' => 'exportProfile'
]);
Auth::routes(['verify' => true]);