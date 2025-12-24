@extends('layout.app')

@section('title', 'Contact | University Management System')

@section('content')
<div class="container py-5">
	<div class="row g-4 align-items-center mb-5">
		<div class="col-lg-6">
			<h1 class="fw-bold">Contact Us</h1>
			<p class="lead text-muted">We’re here to help with admissions, courses, and support.</p>
			<ul class="list-unstyled text-muted mb-4">
				<li class="mb-2"><strong>Email:</strong> support@limu.edu.ly</li>
				<li class="mb-2"><strong>Phone:</strong> +218 (091) 555-1234</li>
				<li class="mb-2"><strong>Address:</strong> Libya , Benghazi</li>
			</ul>
			<div class="d-flex gap-2">
				<span class="badge bg-primary">Admissions</span>
				<span class="badge bg-success">Support</span>
				<span class="badge bg-warning text-dark">IT Help</span>
			</div>
		</div>	
	</div>
</div>

	<div class="row g-4 text-center">
		<div class="col-md-4">
			<div class="p-4 border rounded h-100">
				<h6 class="fw-semibold">Admissions</h6>
				<p class="text-muted mb-0">Guidance on programs, deadlines, and requirements.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="p-4 border rounded h-100">
				<h6 class="fw-semibold">Student Support</h6>
				<p class="text-muted mb-0">Help with enrollment, scheduling, and records.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="p-4 border rounded h-100">
				<h6 class="fw-semibold">Technical Help</h6>
				<p class="text-muted mb-0">Account access, portal issues, and system status.</p>
			</div>
		</div>
	</div>
</div>
@endsection