@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Professor</h2>
        <a href="{{ route('professor.create') }}" class="btn btn-dark">Add Professor</a>
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
                    <th class="text-center">Professor Email</th>
                    <th class="text-center">Professor Name</th>
                    <th class="text-center">Department ID</th>
                    <th class="text-center">Password</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($professor as $professor)
                    <tr>
                        <td class="text-center">{{ $professor->name }}</strong></td>
                        <td class="text-center">{{ $professor->email }}</td>
                        <td class="text-center">{{ $professor->department_id }}</td>
                        <td class="text-center">{{ $professor->password }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('professor.show', $professor->id) }}" class="btn btn-sm btn-dark">
                                    View
                                </a>
                                <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('professor.destroy', $professor->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Professor?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">No Professor found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection