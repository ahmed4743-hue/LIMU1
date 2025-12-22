@extends('Layout.app')
@section('content')
<div class="container-fluid px-0">
    <div class="position-relative">
        <img src="/assets/study3.jpg" class="img-fluid w-100" alt="Campus" style="height: 520px; object-fit: cover; width: 100%;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center" style="background: linear-gradient(180deg, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.35) 60%, rgba(0,0,0,0.15) 100%);">
            <h1 class="fw-bold text-white mb-3">Welcome to University Management System</h1>
            <p class="lead fw-bold text-white mb-0">A centralized platform to manage students, courses, and academic operations efficiently.</p>
            <a role="button" class="btn btn-lg btn-light" href="{{route('admin.login')}}" style="margin-top: 20px; "> <strong >Log in</strong></a>
        </div>
    </div>
</div>


@endsection


