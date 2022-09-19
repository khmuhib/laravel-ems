@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Employee</h1>

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">View Detail</h5>
                <a href="{{ route('employee.index') }}" class="btn btn-primary">Show Employee</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item bg-primary text-white">Employee Basic Information</li>
                            <li class="list-group-item"><b>Name:</b> {{ $employee->name }}</li>
                            <li class="list-group-item"><b>Email:</b> {{ $employee->email }}</li>
                            <li class="list-group-item"><b>Phone:</b> {{ $employee->phone }}</li>
                            <li class="list-group-item"> <b>Department:</b>

                                @foreach ($departments as $department)
                                    @if ($department->id == $employee->department_id)
                                        {{ $department->name }}
                                    @endif
                                @endforeach

                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item bg-primary text-white">Employee Skills</li>
                            @foreach ($employee_skills as $employee_skill)
                                @if ($employee->id == $employee_skill->employee_id)
                                    @foreach ($skills as $skill)
                                        @if ($skill->id == $employee_skill->skill_id)
                                            <li class="list-group-item">{{ $skill->name }}</li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item bg-primary text-white">Working Project</li>
                            @foreach ($employee_projects as $employee_project)
                                @foreach ($projects as $project)
                                    @if ($employee_project->employee_id == $employee->id)
                                        @if ($project->id == $employee_project->project_id)
                                            <li class="list-group-item"><b>Project {{ $project->name }}:</b> PM</li>
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
