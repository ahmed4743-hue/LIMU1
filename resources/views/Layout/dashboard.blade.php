<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background: #212529; color: white; transition: all 0.3s; }
        .content-area { flex-grow: 1; padding: 20px; }
        @media (max-width: 768px) {
            .sidebar { margin-left: -250px; position: absolute; z-index: 1000; height: 100%; }
            .sidebar.show { margin-left: 0; }
        }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column p-3 text-bg-dark" id="sidebar">
        <h4>Dashboard</h4>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li ><a href="#" class="nav-link text-white">Student</a></li>
            <li><a href="#" class="nav-link text-white">Professor</a></li>
            <li><a href="#" class="nav-link text-white">Course</a></li>
            <li><a href="/department" class="nav-link text-white ">Department</a></li>
            <li><a href="#" class="nav-link text-white">Enrollment</a></li>
        </ul>
    </div>

    

        @yield('content') 
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>