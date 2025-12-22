<!DOCTYPE html>
<html lang="en">                
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Guest Layout </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    

</head>
<body class="d-flex flex-column min-vh-100">

<header> 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/" style="font-size: 18px; margin-right: 10px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about" style="font-size: 18px; margin-right: 10px;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contact" style="font-size: 18px;">Contact</a>
        </li>
        <a class="btn btn-dark" href="{{route('admin.login')}}" role="button" style="margin-left: 1200px;">Log in </a>
    </div>
  </div>
</nav>
</header>

<main class="flex-fill">
    @yield('content')
</main>

<footer class="mt-auto bg-light">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.0);">
    © 2025 All rights reserved by University Management System
  </div>
</footer>


</body>
</html>
