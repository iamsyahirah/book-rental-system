@extends('layouts.mainlayout')

@section('title','User')

@section('page-name','User')

@section('content')
  <h1>User List</h1>

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
            <a href="">Edit</a>
            <a href="">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection