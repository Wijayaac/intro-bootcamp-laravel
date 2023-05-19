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
    <form class="form" action="{{ route('books.update', ['isbn' => $book['isbn']]) }}" method="POST">
        @method('put')
        @csrf
        @include('components.form', [
            'book' => $book,
            'isUpdate' => true,
        ])
    </form>

@endsection

@section('pagination')
@endsection
