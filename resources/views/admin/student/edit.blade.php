@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Book</h1>

        <div class="container mt-4">
            @if (session('message'))
                <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.student.update', ['id'=>$student->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$student->name}}"/>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$student->email}}"/>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{$student->phone}}"/>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label>Alternate Phone</label>
                                    <input type="text" name="alternate_phone" class="form-control" value="{{$student->studentDetail->alternate_phone}}"/>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Course</label>
                                    <input type="text" name="course" class="form-control" value="{{$student->studentDetail->course}}"/>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Roll No.</label>
                                    <input type="text" name="roll_no" class="form-control" value="{{$student->studentDetail->roll_no}}"/>
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

    </div>
@endsection
