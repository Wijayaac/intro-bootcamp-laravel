@extends('layout')

@section('title', "Detail {$book['title']}")
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="main-product">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="main-product__thumbnail">
                            <img src="{{ $book['image_path'] }}" alt="{{ $book['title'] }}" width="250px">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-8">
                        <div class="main-product__detail">
                            <h2><b>{{ $book['title'] }}</b></h2>
                            <p><small>by</small> <a href="#" class="h-link">{{ $book['author']->name }}</a></p>

                            <p><small>added by</small> {{ $book->user ? $book->user['name'] : 'Dummy' }}</p>
                            <div class="pt-20">
                                <p>Publisher : <a href="#" class="h-link">{{ $book['publisher'] }}</a></p>
                                <p>Category : <a href="#" class="h-link">{{ $book['category'] }}</a></p>
                                <p>Pages : <b>{{ $book['pages'] }}</b></p>
                                <p>Language : <a href="#" class="h-link">{{ $book['language'] }}</a></p>
                                <p>Publish Date : {{ $book['publish_date'] }}</a></p>
                                <p>Subjects : {!! str_replace(' ', ',', $book['subjects']) !!}</p>

                                <p id="synopsis" class="main-product__description">
                                    {{ $book['desc'] }}
                                </p>
                                <p>ISBN <b>{{ $book['isbn'] }}</b></p>

                                <div class="main-product__cta">
                                    <a href="#" class="btn btn-secondary mt-10 mb-10" role="button">Borrow</a>
                                </div>
                                <div class="main-product__action d-flex gap-2">
                                    @guest
                                    @else
                                        @if (Auth::user()->id === $book['user_id'])
                                            <div>
                                                <a href="{{ route('books.edit', ['isbn' => $book['isbn']]) }}" class="btn btn-warning">Edit</a>
                                            </div>
                                            <form action="{{ url('/books', ['isbn' => $book['isbn']]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger" type="submit" value="Delete" />
                                            </form>
                                        @else
                                            <button disabled="disabled" class="btn btn-warning">Edit</button>
                                            <button disabled="disabled" class="btn btn-danger">Delete</button>
                                        @endif
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
