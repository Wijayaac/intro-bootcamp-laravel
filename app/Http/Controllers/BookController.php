<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
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

    public function show($id)
    {

        $selectedBook = Book::find($id);
        if ($selectedBook) {
            return view('books.detail', [
                "book" => $selectedBook
            ]);
        }

        return redirect('/');
    }

    public function create()
    {
        return view('books.add');
    }

    public function store(BookPostRequest $request)
    {
        $validated = $request->validated();

        $book = new Book();
        $book->create($validated);
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return redirect('/');
        }

        return view('books.edit', [
            'book' => $book
        ]);
    }

    public function update(BookPostRequest $request)
    {
        $validated = $request->validated();
        $book = Book::find($validated['isbn']);

        if ($book) {
            $book->update($validated);
        }
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if ($book) {
            $book->delete();
        }

        return redirect('/');
    }
}
