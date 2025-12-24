@extends('Layout.app')

@section('title', 'Admin Login')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('suceess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('suceess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h4 mb-3 text-center">Admin Login</h1>
                    <form action="{{ route('admin.adminCheckLogin') }}" method="POST" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="you@example.com" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Log in</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="/" class="text-muted">Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
