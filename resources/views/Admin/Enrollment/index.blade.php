@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt-4">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h2>Enrollments</h2>
		<a href="{{ route('enrollment.create') }}" class="btn btn-dark">Add Enrollment</a>
	</div>

	@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	@php
		$enrollments = isset($enrollments)
			? $enrollments
			: \App\Models\Enrollment::with(['student','course','professor'])->get();
	@endphp

	<div class="table-responsive shadow-sm border rounded">
		<table class="table table-hover align-middle mb-0">
			<thead class="table-light">
				<tr>
					<th class="text-center">Student</th>
					<th class="text-center">Course</th>
					<th class="text-center">Professor</th>
					<th class="text-center">Final Mark</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($enrollments as $enrollment)
					<tr>
						<td class="text-center">{{ optional($enrollment->student)->stNo }} — {{ optional($enrollment->student)->name }}</td>
						<td class="text-center">{{ optional($enrollment->course)->symbol }} — {{ optional($enrollment->course)->name }}</td>
						<td class="text-center">{{ optional($enrollment->professor)->name }}</td>
						<td class="text-center">{{ $enrollment->mark ?? '—' }}</td>
						<td class="text-center">
							<div class="d-flex justify-content-center gap-2">
								<a href="{{ route('enrollment.show', $enrollment->id) }}" class="btn btn-sm btn-dark">View</a>
								<a href="{{ route('enrollment.edit', $enrollment->id) }}" class="btn btn-sm btn-warning">Edit</a>
								<form action="{{ route('enrollment.destroy', $enrollment->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Drop this enrollment?')">Delete</button>
								</form>
							</div>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="5" class="text-center py-4 text-muted">No enrollments found.</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>
@endsection
