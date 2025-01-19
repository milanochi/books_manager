<?php

use App\Http\Controllers\BooksController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
//Common Resource Routes
//index: Retrieve and display a list of all books.
//create: Show a form to create a new book.
//store: Save a new book.
//edit: Show a form to edit an existing book.
//update: Update an existing book.
//destroy: Delete a book.

//Display a list of all books
Route::get('/', [BooksController::class, 'index']);

//Show a Form to Create Books
Route::get('/books/create', [BooksController::class, 'create']);

//Save a new Book
Route::post('/books', [BooksController::class, 'store']);

//Show Edit form
Route::get('/books/{book}/edit', [BooksController::class, 'edit']);

//Update an existing book
Route::put('/books/{book}', [BooksController::class, 'update']);

// Manage Books
Route::get('/books/manage', [BooksController::class, 'manage']);

//Destroy / Delete Listing
Route::delete('/books/{book}', [BooksController::class, 'destroy']);

