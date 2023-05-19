@extends('layout')

@section('title', 'Edit')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form" action="{{ route('books.update', ['book' => $book['isbn']]) }}" method="POST">
        @method('put')
        @csrf
        <div class="input__field">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" value="{{ $book['isbn'] }}" id="isbn">
        </div>
        <div class="input__field">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $book['title'] }}" id="title">
        </div>
        <div class="input__field">
            <label for="author">Author</label>
            <input type="text" name="author" value="{{ $book['author'] }}" id="author">
        </div>
        <div class="input__field">
            <label for="image_path">Image URL / path</label>
            <input type="text" name="image_path" value="{{ $book['image_path'] }}" id="image_path">
        </div>
        <div class="input__field">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" value="{{ $book['publisher'] }}" id="publisher">
        </div>
        <div class="input__field">
            <label for="category">Category</label>
            <input type="text" name="category" value="{{ $book['category'] }}" id="category">
        </div>
        <div class="input__field">
            <label for="pages">Pages</label>
            <input type="number" name="pages" value="{{ $book['pages'] }}" id="pages">
        </div>
        <div class="input__field">
            <label for="language">Language</label>
            <input type="text" name="language" value="{{ $book['language'] }}" id="language">
        </div>
        <div class="input__field">
            <label for="publish_date">Publish Date</label>
            <input type="datetime-local" name="publish_date" value="{{ $book['publish_date'] }}" id="publish_date">
        </div>
        <div class="input__field">
            <label for="subjects">Subjects</label>
            <input type="text" name="subjects" value="{{ $book['subjects'] }}" id="subjects">
        </div>
        <div class="input__field">
            <label for="description">ISBN</label>
            <textarea name="desc" id="description" rows="10">
                {{ $book['desc'] }}
            </textarea>
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </form>

@endsection

@section('pagination')
@endsection
