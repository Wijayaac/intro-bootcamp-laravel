@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <!--  item -->
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}" width="250px">
                    <div class="caption">
                        <h3>{{ $book['title'] }}</h3>
                        <p>{{ $book['short_desc'] }}</p>
                        <div class="text-center">
                            <a href=" {{ route('detail', ['id' => $book['id']]) }}" class="btn btn-default" role="button">Show
                                Detail</a>
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
