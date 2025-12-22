@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Departments</h2>
        <a href="{{ route('department.create') }}" class="btn btn-dark">Add Department</a>
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
                    <th class="text-center">Department ID</th>
                    <th class="text-center">Department Name</th>
                    <th class="text-center">Department Symbol</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($departments as $department)
                    <tr>
                        <td class="text-center">{{ $department->id }}</td>
                        <td class="text-center"><strong>{{ $department->name }}</strong></td>
                        <td class="text-center">{{ $department->symbol }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('department.show', $department->id) }}" class="btn btn-sm btn-dark">
                                    View
                                </a>
                                <a href="{{ route('department.edit', $department->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                
                                <form action="{{ route('department.destroy', $department->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">No departments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection