@extends('layouts.mainlayout')

@section('title','Rent Log')

@section('page-name','Rent Log')

@section('content')
  <h1>Rent Log List</h1>

  <div class="mt-5">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>User</th>
          <th>Book</th>
          <th>Rent Date</th>
          <th>Return Date</th>
          <th>Actual Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Amirul</td>
          <td>CSS for Noob</td>
          <td>2022-10-1</td>
          <td>2022-10-4</td>
          <td>2022-10-5</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection