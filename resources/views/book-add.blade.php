@extends('layouts.mainlayout')

@section('title','Add Book')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
        <select name="categories[]" id="category" class="form-control select-multiple" multiple>
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
<script>
  $(document).ready(function() {
    $('.select-multiple').select2();
});
</script>
@endsection