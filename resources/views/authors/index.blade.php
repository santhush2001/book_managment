@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Authors</h2>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Add Author</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Biography</th>
            <th>Actions</th>
        </tr>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->biography }}</td>
            <td>
                <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
