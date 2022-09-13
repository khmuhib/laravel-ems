@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Department</h1>

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Add Department</h5>
                <a href="{{ route('department.index') }}" class="btn btn-primary">Show Department</a>
            </div>
            <div class="card-body">
                <form action="{{ route('department.update' , $department) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter Product Category Name" name="name"
                            value="{{ $department->name }}">
                    </div>
                    <div class="form-group">
                        <input type="radio" name="status" value="0" {{$department->status == 0 ? 'checked': ''}}/> Active
                        <input type="radio" name="status" value="1" {{$department->status == 1 ? 'checked': ''}}/> Inactive
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
@endsection
