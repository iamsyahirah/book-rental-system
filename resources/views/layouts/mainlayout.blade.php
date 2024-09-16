<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Book System | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href={{asset('css/style.css')}} rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  
  <body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-expand-lg bg-light shadow-lg p-3 bg-body rounded">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Rental Book System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidebar" aria-controls="navbarSidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
  
    </div>
        </nav>

  <div class="body-content h-100">
    <div class="row g-0 h-100">
      <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSidebar">
          @if (Auth::user()->role_id == 1)
          <a href="/dashboard" 
          @if(request()->route()->uri == 'dashboard') class="active" 
          @endif>
            <i class="fa-solid fa-gauge icon-spacing"></i></i>
            Dashboard</a>
          <a href="/books"
          @if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}') class="active"
          @endif>
            <i class="fa-solid fa-book icon-spacing"></i>Books</a>
          <a href="/categories"
          @if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}' ) class="active" 
          @endif>
           <i class="fa-solid fa-layer-group icon-spacing"></i>Categories</a>
          <a href="/users"
          @if(request()->route()->uri == 'users' || request()->route()->uri == 'registered-users' || request()->route()->uri == 'user-detail/{slug}') class="active" 
          @endif>
            <i class="fa-solid fa-user icon-spacing"></i>Users</a>
          <a href="/rent-logs"
          @if(request()->route()->uri == 'rent-logs') class="active" 
          @endif>
            <i class="fa-solid fa-list icon-spacing"></i>Rent Log</a>
          <a href="/logout">
            <i class="fa-solid fa-right-from-bracket icon-spacing"></i>Logout</a>
          @else
          <a href="/profile"
          @if(request()->route()->uri == 'profile') class="active" 
          @endif>
            <i class="fa-solid fa-user icon-spacing"></i>Profile</a>
          <a href="/logout">
            <i class="fa-solid fa-right-from-bracket icon-spacing"></i>Logout</a>
          @endif
        
      </div>
      <div class="content p-5 col-lg-10">
         @yield('content')
      </div>
    </div>
  </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>