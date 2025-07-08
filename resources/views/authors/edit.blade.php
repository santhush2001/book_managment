@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Author</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Please fix the following issues:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Author Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $author->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="biography" class="form-label">Biography</label>
            <textarea name="biography" class="form-control" rows="4">{{ old('biography', $author->biography) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Author</button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
