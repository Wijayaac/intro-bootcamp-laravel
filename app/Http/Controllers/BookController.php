<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookPostRequest;
use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [];

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $keyword = $request->search;
            $books = Book::whereHas('author', function (Builder $query) use ($keyword) {
                $query->where('isbn', 'LIKE', "%$keyword%")->orWhere('title', 'LIKE', "%$keyword%")->orWhere('name', 'LIKE', "%$keyword%");
            })->paginate(12);

            $this->books = $books;

            return view("index", [
                'books' => $this->books,
            ]);
        }

        $books = new Book();

        $this->books = $books->paginate(12);
        return view("index", [
            'books' => $this->books,
        ]);
    }

    public function show($isbn)
    {

        $selectedBook = Book::with('author')->with('user')->find($isbn);
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
        return redirect('/');
    }

    public function edit($isbn)
    {
        $book = Book::find($isbn);

        $this->authorize('update-book', $book);

        if (!$book) {
            return redirect('/');
        }

        return view('books.edit', [
            'book' => $book
        ]);
    }

    public function update(BookPostRequest $request, $isbn)
    {
        $validated = $request->validated();
        $book = Book::find($isbn);

        $this->authorize('update-book', $book);

        if ($book) {
            $book->update($validated);
        }
        return redirect()->route('books.index');
    }

    public function destroy($isbn)
    {
        $book = Book::find($isbn);
        if ($book) {
            $book->delete();
        }

        return redirect('/');
    }
}
