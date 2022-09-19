@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Employee</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Employee</h5>
            <a href="{{ route('employee.index') }}" class="btn btn-primary">Show Employee</a>
        </div>
        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row my-3">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Enter Employee Full Name" name="name">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Enter Employee Email" name="email">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                      <input type="number" class="form-control" placeholder="Enter Employee Phone" name="phone">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Enter Employee NID" name="nid">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Enter Employee salary" name="salary">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col ">
                        <select class="form-select form-control" aria-label="Default select example" name="department_id">
                            <option selected>Select Department</option>
                            @foreach ($departments as $department)
                            @if ($department->status == '0')
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endif

                            @endforeach>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select form-control" aria-label="Default select example" name="designation_id">
                            <option selected>Select Dasignation</option>
                            @foreach ($designations as $designation)
                            <option value="{{$designation->id}}">{{$designation->designation_name}}</option>
                            @endforeach>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <label for="">Date of Birth</label>
                      <input type="date" class="form-control" placeholder="Enter Employee birth date" name="dob">
                    </div>
                    <div class="col">
                        <label for="">Joining date</label>
                        <input type="date" class="form-control" placeholder="Enter Employee Joining date" name="join_date">
                    </div>
                    <div class="col">
                        <label for="">Resign date</label>
                        <input type="date" class="form-control" placeholder="Enter Employee Resign date" name="resign_date">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                      <input type="file" class="form-control" name="img">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                      <textarea class="form-control" placeholder="Enter Employee Address" name="address"></textarea>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <select class="form-select form-control" aria-label="Default select example" name="skill[]" multiple>
                            <option selected>Select Skill</option>
                            @foreach ($skills as $skill)
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                            @endforeach>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
