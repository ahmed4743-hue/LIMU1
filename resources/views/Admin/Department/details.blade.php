@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Department Details</h2>
        <div>
            <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('department.edit', $department->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('department.destroy', $department->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this department?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $department->name }}</h5>
                    <p class="card-text"><strong>ID:</strong> {{ $department->symbol }}</p>
                    <p class="card-text"><strong>Created:</strong> {{ optional($department->created_at)->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Updated:</strong> {{ optional($department->updated_at)->format('Y-m-d') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Related</h5>
                    <p class="card-text"><strong>Professors:</strong> {{ $department->professores->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Professors</h5>

            @if($department->professores->isEmpty())
                <p class="text-muted">No professors assigned to this department.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr><th>Name</th><th>Email</th></tr>
                        </thead>
                        <tbody>
                            @foreach($department->professores as $professor)
                                <tr>
                                    <td>{{ $professor->name }}</td>
                                    <td>{{ $professor->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
