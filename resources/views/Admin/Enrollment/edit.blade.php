@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
	<div class="card shadow-sm">
		<div class="card-header bg-dark text-white">
			<h2 class="h5 mb-0">Edit Enrollment</h2>
		</div>
		<div class="card-body">
			@php
				$students = \App\Models\Student::all();
				$courses = \App\Models\Course::all();
				$professors = \App\Models\Professor::all();
			@endphp

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul class="mb-0">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form action="{{ route('enrollment.update', $enrollment->id) }}" method="POST">
				@csrf
				@method('PUT')

				<div class="mb-3">
					<label class="form-label">Student</label>
					<select name="studentId" class="form-select" required>
						@foreach($students as $student)
							<option value="{{ $student->id }}" {{ $enrollment->studentId == $student->id ? 'selected' : '' }}>
								{{ $student->stNo }} — {{ $student->name }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="mb-3">
					<label class="form-label">Course</label>
					<select name="courseId" class="form-select" required>
						@foreach($courses as $course)
							<option value="{{ $course->id }}" {{ $enrollment->courseId == $course->id ? 'selected' : '' }}>
								{{ $course->symbol }} — {{ $course->name }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="mb-3">
					<label class="form-label">Professor</label>
					<select name="professorId" class="form-select" required>
						@foreach($professors as $professor)
							<option value="{{ $professor->id }}" {{ $enrollment->professorId == $professor->id ? 'selected' : '' }}>
								{{ $professor->name }} ({{ $professor->email }})
							</option>
						@endforeach
					</select>
				</div>

				<div class="mb-3">
					<label class="form-label">Final Mark</label>
					<input type="number" name="mark" step="0.01" class="form-control" value="{{ $enrollment->mark }}">
				</div>

				<div class="d-flex gap-2">
					<button type="submit" class="btn btn-dark">Update Enrollment</button>
					<a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
