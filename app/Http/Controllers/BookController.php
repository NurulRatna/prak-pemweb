<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'isbn'           => 'required|string|unique:books,isbn',
            'author'         => 'required|string|max:255',
            'publisher'      => 'required|string|max:255',
            'published_year' => 'required|integer',
            'price'          => 'required|numeric',
            'stock'          => 'required|integer',
            'description'    => 'nullable|string',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'isbn'           => ['required', 'string', Rule::unique('books', 'isbn')->ignore($book->id)],
            'author'         => 'required|string|max:255',
            'publisher'      => 'required|string|max:255',
            'published_year' => 'required|integer',
            'price'          => 'required|numeric',
            'stock'          => 'required|integer',
            'description'    => 'nullable|string',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}