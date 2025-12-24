@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h2 class="h5 mb-0">Edit Professor: {{ $professor->name }}</h2>
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
            <form action="/professor/{{ $professor->id }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label font-weight-bold">Professor Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $professor->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Professor Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $professor->email }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label font-weight-bold">Password (leave blank to keep)</label>
                    <input type="password" name="password" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label font-weight-bold">Department</label>
                    <select name="depId" class="form-select" required>
                        @foreach($departments ?? [] as $department)
                            <option value="{{ $department->id }}" {{ $professor->depId == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                        @endforeach
                    </select>
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