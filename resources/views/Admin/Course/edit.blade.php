@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h2 class="h5 mb-0">Edit Course: {{ $Course->name }}</h2>
        </div>
        <div class="card-body">
            <form action="/course/{{ $course->id }}" method="POST">
                @csrf 
                @method('PUT') <div class="mb-3">
                    <label class="form-label font-weight-bold">Course Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Course Symbol</label>
                    <input type="text" name="symbol" class="form-control" value="{{ course$->symbol }}" required>
                </div>

                <div class="d-flex gap-2" >
                    <button type="submit" class="btn btn-dark">Update Course</button>
                    <a href="/course" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection