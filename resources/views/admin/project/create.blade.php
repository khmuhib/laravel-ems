@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Project</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Project List</h5>
            <a href="{{ route('project.index') }}" class="btn btn-primary">Show Project</a>
        </div>
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                    <label>Project Description</label>
                    <textarea type="text" class="form-control" placeholder="Enter Product Category Name" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Project Budget</label>
                    <input type="number" class="form-control" placeholder="Enter Product budget" name="budget">
                </div>
                <div class="form-group">
                    <label>Project Starting date</label>
                    <input type="date" class="form-control" placeholder="Enter Product Starting date" name="starting_date">
                </div>
                <div class="form-group">
                    <label>Project Submission date</label>
                    <input type="date" class="form-control" placeholder="Enter Product Submission date" name="submission_date">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
