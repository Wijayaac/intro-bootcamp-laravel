@extends('layout')

@section('title', 'Home')
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
    <form class="form" action="{{ route('books.store') }}" method="POST">
        @csrf
        @include('components.form', [
            'isUpdate' => false,
        ])
    </form>

@endsection

@section('pagination')
@endsection
