@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Appointment</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Appointment</h5>
            <a href="{{ route('admin.appointment.list') }}" class="btn btn-primary">Show Appointment</a>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label>Doctor Name</label>
                    <select name="" id="" class="form-control">
                        <option value="" selected>Select Doctor</option>
                        <option value="">adsad</option>
                        <option value="">adsad</option>
                        <option value="">adsad</option>
                        <option value="">adsad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Patient Name</label>
                    <select name="" id="" class="form-control">
                        <option value="" selected>Select Patient</option>
                        <option value="">adsad</option>
                        <option value="">adsad</option>
                        <option value="">adsad</option>
                        <option value="">adsad</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Enter Product Category Name" name="title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
