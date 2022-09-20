@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Book Category</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Book Category</h5>
            <a href="{{ route('admin.book.category.list') }}" class="btn btn-primary">Show Category</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.book.category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Book Category Name</label>
                    <input type="text" class="form-control" placeholder="Enter Book Category Name" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
