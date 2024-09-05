<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book', ['books' => $books]);
    }

    public function add()
    {
        return view('book-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',

        ]);

        $newName = '';

        // Check if the request has a file for 'image'
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->getTimestamp() . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        // Merge the validated data with the new 'cover' field
        $data = array_merge($validated, ['cover' => $newName]);

        // Create a new book record with the combined data
        $book = Book::create($data);

        // Redirect back with success message
        return redirect('books')->with('status', 'Book Added Successfully');


        //  if ($request->file('image')) {
        //      $extension = $request->file('image')->getClientOriginalExtension();
        //      $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
        //     $request->file('image')->storeAs('cover', $newName);
        //  }

        // $request['cover'] = $newName;

        //  $book = Book::create($request->all());
        //   return redirect('books')->with('status', 'Book Added Successfully');
    }
}
