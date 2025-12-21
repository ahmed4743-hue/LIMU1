@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h2 class="h5 mb-0">Edit Department: {{ $department->name }}</h2>
        </div>
        <div class="card-body">
            <form action="/department/{{ $department->id }}" method="POST">
                @csrf 
                @method('PUT') <div class="mb-3">
                    <label class="form-label font-weight-bold">Department Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $department->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Department ID </label>
                    <input type="text" name="symbol" class="form-control" value="{{ $department->symbol }}" required>
                </div>

                <div class="d-flex gap-2" >
                    <button type="submit" class="btn btn-dark">Update Department</button>
                    <a href="/department" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection