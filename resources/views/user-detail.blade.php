@extends('layouts.mainlayout')

@section('title','Users')

@section('content')
  <h1>User Detail</h1>

   <div class="mt-5 d-flex justify-content-end">
    @if ($user->status == 'inactive')
        <a href="/user-approve/{{$user->slug}}" class="btn btn-warning me-3">Approved User List</a>
    @endif
  </div>

   <div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status')}}
    </div>
    @endif
  </div>

  <div class="my-5 w-25">
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{ $user->username}}">
    </div>
     <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{ $user->phone}}">
    </div>
     <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <textarea name="" id="" type=""  cols="30" rows="10" style="resize:none" class="form-control">{{ $user->address}}</textarea>
    </div>
     <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{ $user->status}}">
    </div>
  </div>

  <div class="mt-5">
    <x-rent-log-table :rentlog='$rent_logs' />
  </div>
@endsection