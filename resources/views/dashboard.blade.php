@extends('layouts.mainlayout')

@section('title','Dashboard')

@section('content')

   <h1>Welcome, {{Auth::user()->username}}</h1>

   <div class="row mt-5">
      <div class="col-lg-4">
         <div class="card-data book shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="row">
               <div class="col-6">
                 <i class="bi bi-journal-bookmark"></i>
               </div>
               <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                  <div class="card-desc">Books</div>
                  <div class="card-count">{{$book_count}}</div>
               </div>
            </div>
         </div>
      </div>

        <div class="col-lg-4">
         <div class="card-data cat shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="row">
               <div class="col-6">
                 <i class="bi bi-list-ul"></i>
               </div>
               <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                  <div class="card-desc">Categories</div>
                  <div class="card-count">{{$category_count}}</div>
               </div>
            </div>
         </div>
      </div>

        <div class="col-lg-4">
         <div class="card-data user shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="row">
               <div class="col-6">
                 <i class="bi bi-people"></i>
               </div>
               <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                  <div class="card-desc">Users</div>
                  <div class="card-count">{{$user_count}}</div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="mt-5">
      <h2>Rent Log</h2>

      <div class="mt-5">
         <x-rent-log-table :rentlog='$rent_logs' />
      </div>

      {{-- <table class="table">
         <thead>
            <tr>
               <th>No.</th>
               <th>User</th>
               <th>Book Title</th>
               <th>Rent Date</th>
               <th>Return Date</th>
               <th>Actual Return Date</th>
               <th>Status</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td colspan="7" style="text-align: center">No data</td>
            </tr>
         </tbody>
      </table> --}}
   </div>

      
    
@endsection