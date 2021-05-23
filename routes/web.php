<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ContentController; 
use  Illuminate\Http\Request; 


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

Route::get('/create', function () {
    return view('contents.create');
});

Route::get('/edit', function () {
    return view('sebelum.edit');
});

Route::get('/dashboard', function () {
    return view('sesudah.dashboard');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('content',  ContentController::class);