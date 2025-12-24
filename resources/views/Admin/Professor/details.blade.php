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
                    <p class="card-text"><strong>Email:</strong> {{ $professor->email }}</p>
                    <p class="card-text"><strong>Department:</strong> {{ optional($professor->department)->name ?? '—' }}</p>
                    <p class="card-text"><strong>Created:</strong> {{ optional($professor->created_at)->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Updated:</strong> {{ optional($professor->updated_at)->format('Y-m-d') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Related</h5>
            @php
                $students = method_exists($professor, 'students') ? ($professor->students ?? collect()) : collect();
            @endphp
            <p class="card-text"><strong>Students:</strong> {{ $students->count() }}</p>
        </div>
    </div>
</div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title">Students</h5>

        @if($students->isEmpty())
            <p class="text-muted">No students assigned to this professor.</p>
        @else
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr><th>Name</th><th>Email</th></tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
