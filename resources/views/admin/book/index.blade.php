@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Books</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Books List</h5>
                <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Add Book</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Book Name</th>
                                <th>Book Pages</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Book Name</th>
                                <th>Book Pages</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->pages }}</td>
                                    <td>{{$book->bookCategory->name}}</td>
                                    {{-- <td>{{$book->bookCategory->name}}</td> --}}
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.book.edit', ['id'=>$book->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.book.delete', ['id'=>$book->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
