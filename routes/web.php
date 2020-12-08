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
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GooglePieController;



Route::get('/', function () {
    return view('book');
});

Route::resource('books', BooksController::class);
Route::get('file-export', [BooksController::class, 'fileExport'])->name('file-export');
Route::get('chart', [BooksController::class, 'chart'])->name('chart');
Route::get('barchart', [BooksController::class, 'barchart'])->name('barchart');

