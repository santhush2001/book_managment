@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($author) ? 'Edit Author' : 'Add Author' }}</h2>

    <form action="{{ isset($author) ? route('authors.update', $author) : route('authors.store') }}" method="POST">
        @csrf
        @if(isset($author)) @method('PUT') @endif

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $author->name ?? '') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Biography:</label>
            <textarea name="biography" class="form-control">{{ old('biography', $author->biography ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
