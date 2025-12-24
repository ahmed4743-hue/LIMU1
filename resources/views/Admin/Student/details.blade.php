@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student Details</h2>
        <div>
            <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                  class="d-inline"
                  onsubmit="return confirm('Are you sure you want to delete this student?')">
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
                    <h5 class="card-title">{{ $student->name }}</h5>
                    <p class="card-text"><strong>Student No:</strong> {{ $student->stNo }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                    <p class="card-text"><strong>AVG:</strong> {{ $student->avg ?? '-' }}</p>
                    <p class="card-text"><strong>Status:</strong> {{ $student->status }}</p>
                    <p class="card-text"><strong>Created:</strong> {{ optional($student->created_at)->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Updated:</strong> {{ optional($student->updated_at)->format('Y-m-d') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Related</h5>
                    {{-- غيرها لاحقاً لو عندك علاقات زي enrollments/courses --}}
                    <p class="card-text"><strong>Enrollments:</strong> {{ method_exists($student, 'enrollments') ? $student->enrollments->count() : 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- جدول العلاقات (اختياري) --}}
    @if(method_exists($student, 'enrollments'))
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Enrollments</h5>

                @if($student->enrollments->isEmpty())
                    <p class="text-muted">No enrollments found.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student->enrollments as $enrollment)
                                    <tr>
                                        <td>{{ $enrollment->course->name ?? '-' }}</td>
                                        <td>{{ $enrollment->semester ?? '-' }}</td>
                                        <td>{{ $enrollment->grade ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    @endif
</div>
@endsection