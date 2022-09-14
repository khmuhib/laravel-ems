@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Employee</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Employee List</h5>
                <a href="{{ route('employee.create') }}" class="btn btn-primary">Add Employee</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employee UID</th>
                                <th>Employee Name</th>
                                <th>Employee Email</th>
                                <th>Employee Phone</th>
                                <th>Employee Department Name</th>
                                <th>Employee Designation</th>
                                <th>Employee Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Employee UID</th>
                                <th>Employee Name</th>
                                <th>Employee Email</th>
                                <th>Employee Phone</th>
                                <th>Employee Department Name</th>
                                <th>Employee Designation</th>
                                <th>Employee Photo</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->employee_id}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    @foreach ($departments as $department)
                                        @if ($employee->department_id == $department->id)
                                                {{$department->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($designations as $designation)
                                        @if ($employee->designation_id == $designation->id)
                                                {{$designation->designation_name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td><img src="{{ asset('uploads/admin/img/' . $employee->img) }}"
                                    alt="dasda" height="50" width="50"></td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('employee.edit', $employee) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('employee.destroy', $employee) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
