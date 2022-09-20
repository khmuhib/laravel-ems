@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Book</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Book</h5>
            <a href="" class="btn btn-primary">Show Book</a>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label>Book Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Category Name" name="title">
                </div>
                <div class="form-group">
                    <label>Pages</label>
                    <input type="text" class="form-control" placeholder="Enter Product Category Name" name="title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
