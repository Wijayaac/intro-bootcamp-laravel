<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/books', function () {
    $books = [
        [
            "title" => "The Great Gatsby",
            "author" => "F. Scott Fitzgerald",
            "publisher" => "Scribner",
            "year" => 1925,
            "pages" => 180
        ],
        [
            "title" => "To Kill a Mockingbird",
            "author" => "Harper Lee",
            "publisher" => "J. B. Lippincott & Co.",
            "year" => 1960,
            "pages" => 281
        ],
        [
            "title" => "1984",
            "author" => "George Orwell",
            "publisher" => "Secker & Warburg",
            "year" => 1949,
            "pages" => 328
        ]
    ];
    return $books;
});
Route::get('/books/detail', function () {
    $book = [
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "publisher" => "Scribner",
        "publication_year" => 1925,
        "genre" => "Novel",
        "pages" => 180,
        "language" => "English",
        "isbn" => "9780743273565",
        "summary" => "The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted “gin was the national drink and sex the national obsession,” it is an exquisitely crafted tale of America in the 1920s.",
        "image_url" => "https://images-na.ssl-images-amazon.com/images/I/41O9tBPHdRL._SX310_BO1,204,203,200_.jpg"
    ];

    return $book;
});
