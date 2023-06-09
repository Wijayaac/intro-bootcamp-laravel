<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [BookController::class, 'index'])->name('index');
Route::name('books.')->prefix('books')->group(function () {
    Route::post('/', [BookController::class, 'store'])->middleware('auth')->name('store');
    Route::get('/create', [BookController::class, 'create'])->middleware('auth')->name('create');
    Route::get('/{isbn}', [BookController::class, 'show'])->name('show');
    Route::get('/{isbn}/edit', [BookController::class, 'edit'])->middleware('auth')->name('edit');
    Route::put('/{isbn}', [BookController::class, 'update'])->middleware('auth')->name('update');
    Route::delete('/{isbn}', [BookController::class, 'destroy'])->middleware('auth')->name('destroy');
});

Auth::routes();
