@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Professor Details</h2>
        <div>
            <a href="{{ route('professor.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('professor.destroy', $professor->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this Professor?')">
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
                    <h5 class="card-title">{{ $professor->name }}</h5>
                    <p class="card-text"><strong>symbol:</strong> {{ $professor->symbol }}</p>
                    <p class="card-text"><strong>Created:</strong> {{ optional($professor->created_at)->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Updated:</strong> {{ optional($professor->updated_at)->format('Y-m-d') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Related</h5>
            <p class="card-text"><strong>Professors:</strong> {{ $professor->students->count() }}</p>
        </div>
    </div>
</div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title">Professors</h5>

        @if($professor->students->isEmpty())
            <p class="text-muted">No students assigned to this professor.</p>
        @else
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr><th>Name</th><th>Email</th></tr>
                    </thead>
                    <tbody>
                        @foreach($professor->students as $student)
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
@endsection
