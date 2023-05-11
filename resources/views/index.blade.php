@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <!--  item -->
            <div class="col col-sm-6 col-md-3">
                <div class="card">
                    <div class="card__thumbnail">
                        <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}" width="250px">
                    </div>
                    <div class="card__body">
                        <h3>{{ $book['title'] }}</h3>
                        {{ substr(strip_tags($book['short_desc']), 0, 250) }}
                        {{ strlen(strip_tags($book['short_desc'])) > 50 ? '...' : '' }}
                        <div class="card__cta">
                            <a href=" {{ route('detail', ['id' => $book['id']]) }}" class="btn btn-default" role="button">Show Detail</a>
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
