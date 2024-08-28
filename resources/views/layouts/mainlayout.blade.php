<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Book System | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .main {
        height: 100vh;
    }

    .sidebar {
      background:#232227 ;
      color: #fff;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar li {
      padding: 15px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none; 
    }

    .content {
      background: #f3f7ff;
    }
  </style>
  <body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-expand-lg bg-light shadow-lg p-3 bg-body rounded">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Rental Book System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
  
    </div>
        </nav>

  <div class="body-content h-100">
    <div class="row g-0 h-100">
      <div class="sidebar col-2">
        <ul>
          @if (Auth::user()->role_id == 1)
          <li>Dashboard</li>
          <li>Books</li>
          <li>Categories</li>
          <li>Users</li>
          <li>Rent Log</li>
          <li>Logout</li>
          @else
           <li>Profile</li>
          <li>Logout</li>
          @endif
        </ul>
      </div>
      <div class="content p-5 col-10">
         @yield('content')
      </div>
    </div>
  </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>