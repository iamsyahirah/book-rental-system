@extends('layouts.mainlayout')

@section('title','Add Category')

@section('content')
  <h1>Add New Category</h1>

  <div class="mt-5 w-50">
    <form action="#" method="post">
      <div>
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
      </div>

      <div class="mt-3">
        <button class="btn btn-success">Save</button>
      </div>
    </form>
  </div>
@endsection