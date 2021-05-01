<?php

use Illuminate\Support\Facades\Auth;
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
    return view('sebelum.index');
});
Route::get('/contact', function () {
    return view('sebelum.contact');
});
Route::get('/keranjang', function () {
    return view('sebelum.keranjang');
});
Route::get('/inputData', function () {
    return view('sebelum.inputData');
});
Route::get('/postContent', function () {
    return view('sebelum.postContent');
});
Route::get('/dashboard', function () {
    return view('sesudah.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
