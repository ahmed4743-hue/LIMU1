@extends('layout.dashboard')

@section('content')
<div class="container mt-4">
	<h2>Add New Enrollment</h2>

	@php
		$students = \App\Models\Student::all();
		$courses = \App\Models\Course::all();
		$professors = \App\Models\Professor::all();
	@endphp

	<form action="{{ route('enrollment.store') }}" method="POST">
		@csrf

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul class="mb-0">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="mb-3">
			<label class="form-label">Student</label>
			<select name="studentId" class="form-select" required>
				<option value="" disabled selected>Select Student</option>
				@foreach($students as $student)
					<option value="{{ $student->id }}">{{ $student->stNo }} — {{ $student->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="mb-3">
			<label class="form-label">Course</label>
			<select name="courseId" class="form-select" required>
				<option value="" disabled selected>Select Course</option>
				@foreach($courses as $course)
					<option value="{{ $course->id }}">{{ $course->symbol }} — {{ $course->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="mb-3">
			<label class="form-label">Professor</label>
			<select name="professorId" class="form-select" required>
				<option value="" disabled selected>Select Professor</option>
				@foreach($professors as $professor)
					<option value="{{ $professor->id }}">{{ $professor->name }} ({{ $professor->email }})</option>
				@endforeach
			</select>
		</div>

		<div class="mb-3">
			<label class="form-label">Final Mark</label>
			<input type="number" name="mark" step="0.01" class="form-control" value="{{ old('mark') }}">
		</div>

		<button type="submit" class="btn btn-dark">Save Enrollment</button>
		<a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Back</a>
	</form>
</div>
@endsection
