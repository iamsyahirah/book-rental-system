@extends('layouts.mainlayout')

@section('title','Users')

@section('content')
  <h1>Registered User List</h1>

   <div class="mt-5 d-flex justify-content-end">
    <a href="/users" class="btn btn-warning me-3">Approved User List</a>

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
     @foreach ($registeredUsers as $item)
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
            <a href="/user-detail/{{ $item->slug }}">Details</a>
            <a href="">BAN</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection