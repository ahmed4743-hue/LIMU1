@extends('layout.app')

@section('title', 'About | University Management System')

@section('content')
<div class="container py-5">
	<div class="row align-items-center mb-5">
		<div class="col-lg-6 mb-4 mb-lg-0">
			<h1 class="fw-bold">About Our University Management System</h1>
			<p class="lead text-muted">A single, reliable hub for students, faculty, courses, and operations.</p>
			<p class="text-muted">We built this platform to streamline enrollment, scheduling, grading, and reporting. Our goal is to cut admin overhead so students and faculty can focus on learning and teaching.</p>
		</div>
		
	</div>

	<div class="row g-4">
		<div class="col-md-4">
			<div class="card h-100 shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Unified Data</h5>
					<p class="card-text text-muted">Students, courses, faculty, and enrollments stay consistent and up-to-date in one place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card h-100 shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Smart Workflows</h5>
					<p class="card-text text-muted">Automated flows for enrollment, grading, and reporting reduce manual effort.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card h-100 shadow-sm">
				<div class="card-body">
					<h5 class="card-title">Built for Growth</h5>
					<p class="card-text text-muted">Modular design so new features—like attendance, analytics, or LMS links—can be added easily.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="mt-5 p-4 rounded bg-light border">
		<h4 class="fw-semibold mb-2">What you can manage</h4>
		<ul class="mb-0 text-muted">
			<li>Student profiles, enrollments, and academic records</li>
			<li>Courses, schedules, and assigned faculty</li>
			<li>Departments and program structures</li>
			<li>Reports for performance and compliance</li>
		</ul>
	</div>
</div>
@endsection