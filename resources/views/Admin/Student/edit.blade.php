
@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h2 class="h5 mb-0">Edit Student: {{ $student->name }}</h2>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Student No</label>
                    <input type="text" name="stNo" class="form-control" value="{{ $student->stNo }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Student Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Password (leave empty to keep current)</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">AVG</label>
                    <input type="number" step="0.01" name="avg" class="form-control" value="{{ $student->avg }}">
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="active" {{ $student->status === 'active' ? 'selected' : '' }}>active</option>
                        <option value="notActive" {{ $student->status === 'notActive' ? 'selected' : '' }}>notActive</option>
                        <option value="dismissed" {{ $student->status === 'dismissed' ? 'selected' : '' }}>dismissed</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-dark">Update Student</button>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection