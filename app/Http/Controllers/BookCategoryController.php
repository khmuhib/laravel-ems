<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function index () {
        $book_categories = BookCategory::all();
        return view('admin.bookCategory.index', compact('book_categories'));
    }

    public function create () {
        return view('admin.bookCategory.create');
    }

    public function store (Request $request) {
        //dd($request->all());

        $book_categories = new BookCategory();

        $book_categories->name = $request->name;

        $book_categories->save();

        return redirect()->route('admin.book.category.list')->with('message', 'Category Inserted Successfully');


    }

    public function edit ($id) {
        $book_category = BookCategory::find($id);
        return view('admin.bookCategory.edit', compact('book_category'));
    }

    public function update (Request $request, $id) {
        //dd($request->all());
        $book_category = BookCategory::find($id);

        $book_category->name = $request->name;

        $book_category->update();

        return redirect()->route('admin.book.category.list')->with('message', 'Category Updated Successfully');


    }

    public function delete ($id) {
        $book_category = BookCategory::find($id);
        $book_category->delete();

        return redirect()->route('admin.book.category.list')->with('message', 'Category Deleted Successfully');


    }
}
