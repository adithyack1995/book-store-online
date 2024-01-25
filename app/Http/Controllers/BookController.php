<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(config('variables.userBookPagination'));
        return view('user.books', compact('books'));
    }

    public function show(Book $book)
    {
        return view('user.view-book', compact('book'));
    }
}
