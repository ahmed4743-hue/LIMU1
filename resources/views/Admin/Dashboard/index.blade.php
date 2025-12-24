@extends('Layout.dashboard')

@section('content')
<div class="content-area">
	<div class="container-fluid">
		<h1 class="h3 mb-4">Overview</h1>
		<div class="row g-3">
			<div class="col-sm-6 col-lg-3">
				<div class="card text-bg-light">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<span class="fw-semibold">Students</span>
							<span class="fs-4">{{ $students ?? 0 }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card text-bg-light">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<span class="fw-semibold">Courses</span>
							<span class="fs-4">{{ $courses ?? 0 }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card text-bg-light">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<span class="fw-semibold">Professors</span>
							<span class="fs-4">{{ $professors ?? 0 }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card text-bg-light">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<span class="fw-semibold">Enrollments</span>
							<span class="fs-4">{{ $enrollment ?? 0 }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
