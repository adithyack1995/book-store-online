<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books =  Book::paginate(config('variables.pagination'));
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $path = 'books';
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 0775, true, true);
        }
        $uploadedFile = $request->image->store($path);
        $data['image'] = $uploadedFile;
        Book::create($data);
        return redirect('admin/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('admin.books.view', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();
        $path = 'books';
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 0775, true, true);
        }
        $uploadedFile = $request->image->store($path);
        $data['image'] = $uploadedFile;
        $book->update($data);
        return redirect('admin/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
            'success' => true
        ]);
    }
}
