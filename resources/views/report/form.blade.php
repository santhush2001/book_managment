@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Generate Book Report (PDF)</h2>

    <form action="{{ route('report.generate') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="from_date">From Date:</label>
            <input type="date" name="from_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="to_date">To Date:</label>
            <input type="date" name="to_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Generate PDF</button>
    </form>
</div>
@endsection
