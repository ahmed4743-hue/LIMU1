@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h2 class="h5 mb-0">Edit Professor: {{ $professor->name }}</h2>
        </div>
        <div class="card-body">
            <form action="/professor/{{ $professor->id }}" method="POST">
                @csrf 
                @method('PUT') <div class="mb-3">
                    <label class="form-label font-weight-bold">Professor Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $professor->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Professor Symbol</label>
                    <input type="text" name="symbol" class="form-control" value="{{ $professor->symbol }}" required>
                </div>

                <div class="d-flex gap-2" >
                    <button type="submit" class="btn btn-dark">Update Professor</button>
                    <a href="/professor" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection