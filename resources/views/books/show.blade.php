@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $book->title }}</h2>
    <p><strong>Author:</strong> {{ $book->author->name }}</p>
    <p><strong>Publish Date:</strong> {{ $book->publish_date }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
