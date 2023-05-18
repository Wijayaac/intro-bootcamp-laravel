<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
use App\Models\Book;
use Illuminate\Http\Request;

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

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        // $selectedBook = $book->where('isbn', '=', $id)->first();
        if ($book) {
            $book->delete();
        }

        return redirect('/');
    }
}
