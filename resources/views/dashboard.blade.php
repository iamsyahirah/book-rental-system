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
                  <div class="card-count">100</div>
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
                  <div class="card-count">45</div>
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
                  <div class="card-count">190</div>
               </div>
            </div>
         </div>
      </div>
    
      
   </div>

      
    
@endsection