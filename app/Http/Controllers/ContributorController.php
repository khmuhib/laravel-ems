<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Contributor;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index () {
        $contributors = Contributor::orderBy('id', 'DESC')->with('books')->get();

        return view('admin.contributor.index',compact('contributors'));
    }

    public function create () {
        $books = Book::orderBy('id', 'DESC')->get();
        return view('admin.contributor.create', compact('books'));
    }
    public function store (Request $request) {
        //dd($request->all());

        $contributors = new Contributor();

        $contributors->name = $request->name;
        $contributors->book_id = $request->book_id;

        $contributors->save();

        return redirect()->route('admin.contributor.list')->with('message', 'Contributor Inserted Successfully');


    }

    public function edit ($id) {
        $contributor = Contributor::find($id);

        return view('admin.contributor.edit', compact('contributor'));
    }

    public function update (Request $request, $id) {
        //dd($request->all());

        $contributor = Contributor::find($id);

        $contributor->name = $request->name;

        $contributor->update();

        return redirect()->route('admin.contributor.list')->with('message', 'Contributor Updated Successfully');


    }

    public function delete ($id) {
        $contributor = Contributor::find($id);

        $contributor->delete();

        return redirect()->route('admin.contributor.list')->with('message', 'Contributor Deleted Successfully');
    }

}
