@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Dashboard</h2>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h5>Total Books</h5>
                    <h2>{{ $totalBooks }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h5>Total Authors</h5>
                    <h2>{{ $totalAuthors }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <a href="{{ route('books.create') }}" class="btn btn-primary w-100">📚 Add Book</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('authors.create') }}" class="btn btn-primary w-100">👨‍🏫 Add Author</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('report.form') }}" class="btn btn-success w-100">📄 Generate Report</a>
        </div>
    </div>
@endsection
