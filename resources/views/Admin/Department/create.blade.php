@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Add New Department</h2>
    
    <form action="/department" method="POST">
        @csrf <div class="mb-3">
            <label class="form-label">Department Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label class="form-label">Department Symbol</label>
            <input type="text" name="symbol" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-dark">Save Department</button>
        <a href="/department" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection