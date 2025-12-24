
@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Students</h2>
        <a href="{{ route('student.create') }}" class="btn btn-dark">Add Student</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm border rounded">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="text-center">Student ID</th>
                    <th class="text-center">Student No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">AVG</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td class="text-center">{{ $student->id }}</td>
                        <td class="text-center">{{ $student->stNo }}</td>
                        <td class="text-center">{{ $student->name }}</td>
                        <td class="text-center">{{ $student->email }}</td>
                        <td class="text-center">{{ $student->avg ?? '-' }}</td>
                        <td class="text-center">
                            <span class="badge
                                {{ $student->status === 'active' ? 'bg-success' : ($student->status === 'dismissed' ? 'bg-danger' : 'bg-secondary') }}">
                                {{ $student->status }}
                            </span>
                        </td>

                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-sm btn-dark">
                                    View
                                </a>

                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this student?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-muted">No students found.</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>
@endsection