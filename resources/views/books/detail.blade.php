@extends('layout')

@section('title', "Detail {$book['title']}")
@section('content')
    <div class="row">
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
                            <p><small>by</small> <a href="#" class="h-link">{{ $book['author'] }}</a></p>
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
                                    <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                                </div>
                                <div class="main-product__action d-flex">
                                    <a href="{{ route('books.edit', ['book' => $book['isbn']]) }}" class="btn btn-warning mx-2">Edit</a>
                                    <form action="{{ url('/books', ['book' => $book['isbn']]) }}" method="post">
                                        <input class="btn btn-danger" type="submit" value="Delete" />
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
