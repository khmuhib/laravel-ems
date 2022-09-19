@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Employee</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Edit Employee</h5>
            <a href="{{ route('employee.index') }}" class="btn btn-primary">Show Employee</a>
        </div>
        <div class="card-body">
            <form action="{{ route('employee.update', $employee) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row my-3">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Enter Employee Full Name" name="name" value="{{$employee->name}}">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Enter Employee Email" name="email" value="{{$employee->email}}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                      <input type="number" class="form-control" placeholder="Enter Employee Phone" name="phone" value="{{$employee->phone}}">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Enter Employee NID" name="nid" value="{{$employee->nid}}">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Enter Employee salary" name="salary" value="{{$employee->salary}}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col ">
                        <label for="">Department Name</label>
                        <select class="form-select form-control" aria-label="Default select example" name="department_id">
                            {{-- <option>Select Department</option> --}}
                            @foreach ($departments as $department)
                            <option value="{{$department->id}}" {{$department->id == $employee->department_id ? 'selected': ''}}>{{$department->name}}</option>
                            @endforeach>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Designation</label>
                        <select class="form-select form-control" aria-label="Default select example" name="designation_id">
                            {{-- <option selected>Select Dasignation</option> --}}
                            @foreach ($designations as $designation)
                            <option value="{{$designation->id}}" {{$designation->id == $employee->designation_id ? 'selected': ''}}>{{$designation->designation_name}}</option>
                            @endforeach>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <label for="">Date of Birth</label>
                      <input type="date" class="form-control" placeholder="Enter Employee birth date" name="dob" value="{{$employee->dob}}">
                    </div>
                    <div class="col">
                        <label for="">Joining date</label>
                        <input type="date" class="form-control" placeholder="Enter Employee Joining date" name="join_date" value="{{$employee->join_date}}">
                    </div>
                    <div class="col">
                        <label for="">Resign date</label>
                        <input type="date" class="form-control" placeholder="Enter Employee Resign date" name="resign_date" value="{{$employee->resign_date}}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <input type="file" class="form-control" placeholder="Background Image" name="img"
                        value="{{ $employee->img }}">

                    <img src="{{ asset('uploads/admin/img/' . $employee->img) }}" alt="profile_img"
                        style="width: 150px; height: 150px;" class="img-thumbnail my-2">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                      <textarea class="form-control" placeholder="Enter Employee Address" name="address">{{$employee->address}}</textarea>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <select class="form-select form-control" aria-label="Default select example" name="skill[]" multiple>
                            {{-- <option selected>Select Skill</option> --}}
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
