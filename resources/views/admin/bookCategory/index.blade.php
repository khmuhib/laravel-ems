@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Book Category</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Book Category List</h5>
                <a href="{{ route('admin.book.category.create') }}" class="btn btn-primary">Add Category</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($book_categories as $book_category)
                                <tr>
                                    <td>{{ $book_category->id }}</td>
                                    <td>{{ $book_category->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.book.category.edit', ['id'=>$book_category->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.book.category.delete', ['id'=>$book_category->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
