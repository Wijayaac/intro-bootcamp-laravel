@extends('layout')

@section('title', 'Home')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        @foreach ($books->items() as $book)
            <!--  item -->
            <div class="col col-sm-6 col-md-3">
                <div class="card">
                    <div class="card__thumbnail">
                        <img src="{{ $book['image_path'] }}" alt="{{ $book['title'] }}" width="250px">
                    </div>
                    <div class="card__body">
                        <h3>{{ $book['title'] }}</h3>
                        {{ substr(strip_tags($book['desc']), 0, 150) }}
                        {{ strlen(strip_tags($book['desc'])) > 50 ? '...' : '' }}
                        <div class="card__cta">
                            <a href=" {{ route('books.show', ['isbn' => $book['isbn']]) }}" class="btn btn-default" role="button">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('pagination')
    @include('components.pagination')
@endsection
