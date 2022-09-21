@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Book</h1>

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Add Book</h5>
                <a href="{{ route('admin.book.list') }}" class="btn btn-primary">Show Book</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.book.update', ['id'=>$book->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" class="form-control" placeholder="Enter Product Category Name" name="name" value="{{$book->name}}">
                    </div>
                    <div class="form-group">
                        <label>Pages</label>
                        <input type="text" class="form-control" placeholder="Enter Product Category Name" name="pages" value="{{$book->pages}}">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="category_id">
                            <option selected>Open this Book Category</option>
                            @foreach ($book_categories as $book_category)
                                <option value="{{$book_category->id}}" {{$book_category->id == $book->category_id ? 'selected':''}}>{{ $book_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
@endsection
