@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $author->name }}</h2>
    <p><strong>Biography:</strong></p>
    <p>{{ $author->biography }}</p>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
