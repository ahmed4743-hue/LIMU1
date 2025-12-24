@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Course</h2>
        <a href="{{ route('course.create') }}" class="btn btn-dark">Add Course</a>
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
                    <th class="text-center">Course Symbol </th>
                    <th class="text-center">Course Name</th>
                    <th class="text-center">Course Credit</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($course as $course)
                    <tr>
                        <td class="text-center">{{ $course->Credit }}</td>
                        <td class="text-center">{{ $course->name }}</strong></td>
                        <td class="text-center">{{ $course->symbol }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('course.show', $course->id) }}" class="btn btn-sm btn-dark">
                                    View
                                </a>
                                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                
                                <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Course?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">No Course found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection