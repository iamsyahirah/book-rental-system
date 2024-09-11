@extends('layouts.mainlayout')

@section('title','Add Book')

@section('content')
  <h1>Add New Book</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="mt-5 w-50">
    <form action="book-add" method="post">
      @csrf
      <div class="mb-3" enctype="multipart/form-data">
        <label for="book_code" class="form-label">Code</label>
        <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Book's Code" value="{{ old('book_code')}}">
      </div>

       <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Book's Title" value="{{ old('title')}}">
      </div>

       <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="categories" id="category" class="form-control">
          <option value="">Choose Category</option>
         @foreach ($categories as $item)
         <option value="{{ $item->id }}">{{ $item->name }}</option>
         @endforeach
        </select>
      </div>


      <div class="mt-3">
        <button class="btn btn-success" type="submit">Save</button>
        <a href="/books" class="btn btn-danger">Cancel</a>
      </div>
    </form>
  </div>
@endsection