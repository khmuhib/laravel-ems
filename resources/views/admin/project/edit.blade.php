@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Project</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Project Edit</h5>
            <a href="{{ route('project.index') }}" class="btn btn-primary">Show Project</a>
        </div>
        <div class="card-body">
            <form action="{{ route('project.update', $project) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="name" value="{{$project->name}}">
                </div>
                <div class="form-group">
                    <label>Project Description</label>
                    <textarea type="text" class="form-control" placeholder="Enter Product Category Name" name="description">{{$project->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Project Budget</label>
                    <input type="number" class="form-control" placeholder="Enter Product budget" name="budget" value="{{$project->budget}}" >
                </div>
                <div class="form-group">
                    <label>Project Starting date</label>
                    <input type="date" class="form-control" placeholder="Enter Product Starting date" name="starting_date" value="{{$project->starting_date}}" >
                </div>
                <div class="form-group">
                    <label>Project Submission date</label>
                    <input type="date" class="form-control" placeholder="Enter Product Submission date" name="submission_date" value="{{$project->submission_date}}" >
                </div>
                
                <div class="form-group">
                    <input type="radio" name="status" value="0" {{$project->status == 0 ? 'checked': ''}}/> Active
                    <input type="radio" name="status" value="1" {{$project->status == 1 ? 'checked': ''}}/> Inactive
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
