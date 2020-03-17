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
});

Auth::routes();

Route::get('/menu', 'HomeController@index')->name('home');

Route::get('/registrologin', function () {
    return view('registrologin');
})->name('registrologin');

Route::get('vista', function () {
    return view('vista');
});

Route::post('/registro', 'ControladorUsuario@registrarse')->name('registro');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');