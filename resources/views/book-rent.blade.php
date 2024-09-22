@extends('layouts.mainlayout')

@section('title','Book rent')

@section('content')

  <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
    <h1>Book Rent Form</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user" id="user" class="form-control">
                <option value="">Select User</option>
                @foreach ($users as $item)
                <option value="{{ $item->id }}">{{ $item->username }}</option>
                @endforeach
            </select>
        </div>
         <div class="mb-3">
            <label for="book" class="form-label">Book</label>
            <select name="book" id="book" class="form-control">
                <option value="">Select Book</option>
                @foreach ($books as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button class="btn btn-primary w-100" type="submit">Submit</button>
        </div>

    </form>
  </div>
    
@endsection