@extends('layout')

@section('title', "Detail {$book['title']}")
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="main-product">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="main-product__thumbnail">
                            <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}" width="250px">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-8">
                        <div class="main-product__detail">
                            <h2><b>{{ $book['title'] }}</b></h2>
                            <p><small>by</small> <a href="#" class="h-link">Humanoid</a></p>
                            <div class="pt-20">
                                <p>Publisher <a href="#" class="h-link">Penguin</a></p>
                                <p>Category <a href="#" class="h-link">Novel</a></p>
                                <p>Pages <b>650</b></p>
                                <p>Language <a href="#" class="h-link">English</a></p>
                                <p>Publish Date <a href="#" class="h-link">2020</a></p>
                                <p>Subjects <a href="#" class="h-link">Fantasy</a>, <a href="#" class="h-link">Fiction</a>, <a href="#" class="h-link">Good and Evil</a></p>
                                <p id="synopsis" class="main-product__description">
                                    {{ $book['short_desc'] }}
                                </p>
                                <p>ISBN <b>109128982384</b></p>

                                <div class="main-product__cta">
                                    <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
