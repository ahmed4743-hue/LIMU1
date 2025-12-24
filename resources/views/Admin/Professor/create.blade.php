@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Add New Professor </h2>

    <form action="/professor" method="POST">
        @csrf <div class="mb-3">
            <label class="form-label">Professor Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label class="form-label">Professor Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Department ID</label>
            <input type="text" name="department_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-dark">Save Professor</button>
        <a href="/professor" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection