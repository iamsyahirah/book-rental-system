@extends('layouts.mainlayout')

@section('title','User')

@section('page-name','User')

@section('content')
  <h1>User List</h1>

   <div class="mt-5 d-flex justify-content-end">
    <a href="category-deleted" class="btn btn-warning me-3">View Banned User</a>
    <a href="category-add" class="btn btn-success">New Registered User</a>
  </div>

  <div class="my-5">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Username</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($users as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->username }}</td>
          <td>
            @if ($item->phone)
              {{ $item->phone }}
            @else
              -
            @endif
          </td>
          <td>
            <a href="">Details</a>
            <a href="">BAN</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection