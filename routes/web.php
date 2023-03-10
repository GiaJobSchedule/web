<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::controller(CustomAuthController::class)->group(function() {
    Route::get('login', 'index')->name('login');
    Route::post('custom-login', 'customLogin')->name('custom-login');
    Route::get('registration', 'registration')->name('registration');
    Route::get('custom-registration', 'customRegistration')->name('custom-registration');
    Route::get('signout', 'signOut')->name('signout');
});
