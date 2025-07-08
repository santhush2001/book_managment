@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Books</h2>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add Book</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publish Date</th>
            <th>Actions</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->publish_date }}</td>
            <td>
                
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
