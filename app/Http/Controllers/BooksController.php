<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;


class BooksController extends Controller
{
    //Show all Books
    public function index() {

        return inertia('Book/Index', [
        'books' => Book::all()
        ]);
    }

     //Show create form
    public function create() {
        return inertia('Book/Create');
    }

    //Store Book Data
    public function store(Request $request) {
        $formFields = $request->validate([
        
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|max:2025',
            'genre' => 'required',
        ]);

        Book::create($formFields);

        return redirect('/')->with('message', 'Books Created Successfully!');
    }

    //Show Edit form
    public function edit(Book $book) {
        return inertia('Book/Edit', ['books' => $book, 'isUpdating' => true]);
    }

    //Update Book Data
    public function update(Request $request, Book $book) {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|max:2025',
            'genre' => 'required',
        ]);

        $book->update($formFields);

        return back()->with('message', 'Book Updated Successfully!');
    }

    //Delete Book
     public function destroy(Book $book) {
        $book->delete();
        return redirect('/')->with('message', 'Book Deleted Successfully');
    }

    //Manage Books
    public function manage() {
        return inertia('Book/Manage', ['books' => Book::all()]);
    }
}
