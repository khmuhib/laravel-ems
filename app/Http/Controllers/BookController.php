<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {
        $books = Book::orderBy('id', 'DESC')->with('bookCategory')->get();
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

    public function edit ($id) {
        $book = Book::find($id);
        $book_categories = BookCategory::all();

        return view('admin.book.edit', compact('book', 'book_categories'));
    }

    public function update (Request $request, $id) {
        $book = Book::find($id);
        //$book_categories = BookCategory::all();


        $book->name = $request->name;
        $book->pages = $request->pages;
        $book->category_id = $request->category_id;

        $book->update();

        return redirect()->route('admin.book.list')->with('message', 'Book Updated Successfully');
    }

    public function delete ($id) {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('admin.book.list')->with('message', 'Book Delete Successfully');

    }
}
