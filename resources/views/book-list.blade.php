@extends('layouts.mainlayout')

@section('title','Dashboard')

@section('content')

<div class="my-5">
    <div class="row">
        @foreach ($books as $item)
        <div class="col-3 mb-3">
             <div class="card h-100">
                <img src="{{ $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/cover_not_found.jpeg') }}" class="card-img-top" alt="..." draggable="false">
                <div class="card-body">
                <h5 class="card-title">{{ $item->book_code }}</h5>
                <p class="card-text">{{ $item->title }}</p>
                <a href="#" class="card-text text-end {{ $item->status == 'in stock' ? 'text-success' : 'text-danger' }}">{{ $item->status }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    
@endsection