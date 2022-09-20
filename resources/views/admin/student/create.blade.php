@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Book</h1>

        <div class="container mt-4">
            @if (session('message'))
                <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between pt-4">
                    <h5 class="card-title">Student List</h5>
                    <a href="{{ route('admin.student.list') }}" class="btn btn-primary">Show Student</a>
                </div>


                <div class="card-body">
                    <form action="{{ route('admin.student.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label>Alternate Phone</label>
                                <input type="text" name="alternate_phone" class="form-control" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>Roll No.</label>
                                <input type="text" name="roll_no" class="form-control" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
