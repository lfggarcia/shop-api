<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return response()->json($books);
    }

    public function store(Books $book)
    {
        $book->save();
        return response()->json([
            'message' => 'Book created successfully'
        ],201);
    }

    public function show(Books $book)
    {
        return response()->json($book);
    }

    public function update(Books $book, Request $request)
    {
        $book->updateOrFail($request->all());
        return response()->json([
            'message' => 'Book updated successfully'
        ],200);
    }

    public function destroy(Books $book)
    {
        $book->delete();
        return response()->json([
            'message' => 'Book deleted successfully'
        ],200);
    }
}
