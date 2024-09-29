@extends('layouts.mainlayout')

@section('title','Rent Log')

@section('page-name','Rent Log')

@section('content')
  <h1>Rent Log List</h1>

  <div class="mt-5">
    <h2>User's Rent Log</h2>
    <x-rent-log-table :dashboard='$rent_logs' />
  </div>

@endsection