@extends('layouts.mainlayout')

@section('title','Books List')

@section('content')
 <h1>Book List</h1>

  <div class="mt-5 d-flex justify-content-end">
    <a href="category-deleted" class="btn btn-warning me-3">View Deleted Data</a>
    <a href="category-add" class="btn btn-success">Add Data</a>
  </div>

  <div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status')}}
    </div>
    @endif
  </div>

  <div class="my-5">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Code</th>
          <th>Title</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->book_code }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->status }}</td>
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