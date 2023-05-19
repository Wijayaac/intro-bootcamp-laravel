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
    Route::post('/', [BookController::class, 'store'])->name('store');
    Route::get('/create', [BookController::class, 'create'])->name('create');
    Route::get('/{isbn}', [BookController::class, 'show'])->name('show');
    Route::get('/{isbn}/edit', [BookController::class, 'edit'])->name('edit');
    Route::put('/{isbn}', [BookController::class, 'update'])->name('update');
    Route::delete('/{isbn}', [BookController::class, 'destroy'])->name('destroy');
});
