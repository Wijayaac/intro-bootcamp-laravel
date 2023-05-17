<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    private $books = [];

    public function index()
    {
        $books = new Book();
        $this->books = $books->paginate(12);
        return view("index", [
            'books' => $this->books,
        ]);
    }

    public function detail($id)
    {

        $books = new Book();
        $selectedBook = $books->query()->where("isbn", '=', $id)->first();
        if ($selectedBook) {
            return view('detail', [
                "book" => $selectedBook
            ]);
        }

        return redirect('/');
    }
}
