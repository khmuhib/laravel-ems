@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Doctor</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Doctor</h5>
            <a href="{{ route('admin.doctor.list') }}" class="btn btn-primary">Show Doctor</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.doctor.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Doctor Name</label>
                    <input type="text" class="form-control" placeholder="Enter Doctor Name" name="name">
                </div>
                <div class="form-group">
                    <label>Doctor Title</label>
                    <input type="text" class="form-control" placeholder="Enter Doctor Title" name="title">
                </div>
                <div class="form-group">
                    <label>Doctor Phone</label>
                    <input type="number" class="form-control" placeholder="Enter Doctor Phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
