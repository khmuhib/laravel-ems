<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    public function create () {
        $book_categories = BookCategory::all();
        return view('admin.book.create', compact('book_categories'));
    }

    public function store (Request $request) {
        //dd($request->all());
        $books = new Book();

        $books->name = $request->name;
        $books->pages = $request->pages;
        $books->category_id = $request->category_id;

        $books->save();

        return redirect()->route('admin.book.list')->with('message', 'Book Inserted Successfully');


    }
}
