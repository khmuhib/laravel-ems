@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Patients</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Patient</h5>
            <a href="{{ route('admin.patient.list') }}" class="btn btn-primary">Show Patients</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.patient.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Patient Name</label>
                    <input type="text" class="form-control" placeholder="Enter Patient Name" name="name">
                </div>
                <div class="form-group">
                    <label>Patient Phone</label>
                    <input type="number" class="form-control" placeholder="Enter Patient Phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
