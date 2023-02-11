<?php

use App\Http\Middleware\Level;
use App\Http\Middleware\LevelManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

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
Route::group(['middleware' => ['auth']], function () {
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::get('product/destroy/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    Route::resource('activity', \App\Http\Controllers\ActivityLogController::class);
    Route::resource('User', \App\Http\Controllers\UserController::class);

    //laporan
    Route::resource('laporan',\App\Http\Controllers\LaporanController::class);
    Route::get('/search', [LaporanController::class, 'search'])->name('search');
    //Route::post('/laporan/search', 'App\Http\Controllers\LaporanController@search')->name('laporan.search');

    //cart
    Route::resource('cart', \App\Http\Controllers\UserCartController::class);
    Route::resource('order', \App\Http\Controllers\OrderController::class);

    //Transaksi
    Route::resource('do_transaction', \App\Http\Controllers\DoTransactionController::class);
    Route::resource('invoice',\App\Http\Controllers\InvoiceController::class);
});

//Route::group(['middleware' => ['auth', 'levelmanager']], function () {
    //Route::resource('product', \App\Http\Controllers\ProductController::class);
    //Route::get('product/destroy/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
//});

// Route::group(['middleware' => ['auth', 'levelkasir']], function () {
//     //cart
//     Route::resource('cart', \App\Http\Controllers\UserCartController::class);
//     Route::resource('order', \App\Http\Controllers\OrderController::class);

//     Route::resource('do_transaction', \App\Http\Controllers\DoTransactionController::class);
//     Route::resource('invoice',\App\Http\Controllers\InvoiceController::class);
//     Route::resource('laporan', \App\Http\Controllers\LaporanController::class);
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//membuat route test
Route::get('/test', function () {
    return view('layouts.master');
});