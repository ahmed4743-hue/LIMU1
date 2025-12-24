@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h2>Enrollment Details</h2>
		<div>
			<a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Back</a>
			<a href="{{ route('enrollment.edit', $enrollment->id) }}" class="btn btn-warning">Edit</a>
			<form action="{{ route('enrollment.destroy', $enrollment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Drop this enrollment?')">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger">Delete</button>
			</form>
		</div>
	</div>

	@php
		$student = method_exists($enrollment, 'student') ? $enrollment->student : \App\Models\Student::find($enrollment->studentId);
		$course = method_exists($enrollment, 'course') ? $enrollment->course : \App\Models\Course::find($enrollment->courseId);
		$professor = method_exists($enrollment, 'professor') ? $enrollment->professor : \App\Models\Professor::find($enrollment->professorId);
	@endphp

	<div class="row mb-4">
		<div class="col-md-6">
			<div class="card shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Student</h5>
					<p class="card-text"><strong>No:</strong> {{ optional($student)->stNo ?? '—' }}</p>
					<p class="card-text"><strong>Name:</strong> {{ optional($student)->name ?? '—' }}</p>
					<p class="card-text"><strong>Email:</strong> {{ optional($student)->email ?? '—' }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Course</h5>
					<p class="card-text"><strong>Symbol:</strong> {{ optional($course)->symbol ?? '—' }}</p>
					<p class="card-text"><strong>Name:</strong> {{ optional($course)->name ?? '—' }}</p>
					<p class="card-text"><strong>Unit:</strong> {{ optional($course)->unit ?? '—' }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-md-6">
			<div class="card shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Professor</h5>
					<p class="card-text"><strong>Name:</strong> {{ optional($professor)->name ?? '—' }}</p>
					<p class="card-text"><strong>Email:</strong> {{ optional($professor)->email ?? '—' }}</p>
					<p class="card-text"><strong>Department:</strong> {{ optional(optional($professor)->department)->name ?? '—' }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Mark</h5>
					<p class="card-text"><strong>Final Mark:</strong> {{ $enrollment->mark ?? '—' }}</p>
					<p class="card-text"><strong>Created:</strong> {{ optional($enrollment->created_at)->format('Y-m-d') }}</p>
					<p class="card-text"><strong>Updated:</strong> {{ optional($enrollment->updated_at)->format('Y-m-d') }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
