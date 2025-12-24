@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Add New Student</h2>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Student No</label>
            <input type="text" name="stNo" class="form-control" value="{{ old('stNo') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            <small class="text-muted">Must be a LIMU email (example@limu.edu.ly).</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">AVG</label>
            <input type="number" step="0.01" name="avg" class="form-control" value="{{ old('avg') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>active</option>
                <option value="notActive" {{ old('status') === 'notActive' ? 'selected' : '' }}>notActive</option>
                <option value="dismissed" {{ old('status') === 'dismissed' ? 'selected' : '' }}>dismissed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Save Student</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection