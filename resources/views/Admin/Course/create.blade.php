@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Add New Course </h2>
    
    <form action="/course" method="POST">
        @csrf <div class="mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label class="form-label">Course Symbol</label>
            <input type="text" name="symbol" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Course Credit</label>
            <input type="text" name="symbol" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-dark">Save Course</button>
        <a href="/course" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection