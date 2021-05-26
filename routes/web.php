<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ContentController;
use App\Http\Controllers\DataPetaniController;
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
    return view('sebelum.dataPetani.inputData');
});

// Route::get('/dataPetani', function () {
//     return view('sebelum.dataPetani.index');
// });


Route::get('/create', function () {
    return view('contents.create');
});

Route::get('/edit', function () {
    return view('sebelum.edit');
});

Route::get('/dashboard', function () {
    return view('sesudah.dashboard');
});

// Route::get('dataPetani/tampil', function () {
//     return view('sebelum.dataPetani.tampil');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('content',  ContentController::class);
Route::resource('dataPetani',  DataPetaniController::class);
// Route::get('dataPetani/tampil', DataPetaniController::class, 'tampil')->name('dataPetani.tampil');

Route::get('datapetani/invoice/{datapetani}', [DataPetaniController::class, 'invoice']);
