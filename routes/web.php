<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ContentController;
use App\Http\Controllers\DataPetaniController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/', [ContentController::class, 'index']);

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

Route::get('/postContent', function () {
    return view('sebelum.postContent');
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

Route::get('inputPengumuman', function () {
    return view('sebelum.pengumuman.inputData');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('content',  ContentController::class);

Route::get('dataPetani/tampil', [App\Http\Controllers\DataPetaniController::class, 'tampil'])->name('dataPetani.tampil');
Route::resource('dataPetani',  DataPetaniController::class);

Route::get('datapetani/invoice/{datapetani}', [DataPetaniController::class, 'invoice']);
Route::resource('article', ArticleController::class);

Route::resource('pengumuman',  PengumumanController::class);

Route::get('/artikel1', [ArticleController::class, 'artikel1']);
Route::get('/artikel2', [ArticleController::class, 'artikel2']);
Route::get('/artikel3', [ArticleController::class, 'artikel3']);

Route::get('/populer1', [ArticleController::class, 'populer1']);
Route::get('/populer2', [ArticleController::class, 'populer2']);
Route::get('/populer3', [ArticleController::class, 'populer3']);
