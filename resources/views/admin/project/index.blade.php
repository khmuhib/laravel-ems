@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Projects</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Project List</h5>
                <a href="{{ route('project.create') }}" class="btn btn-primary">Add Projects</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Project budget</th>
                                <th>Project Starting Date</th>
                                <th>Project Submission Date</th>
                                <th>Project Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Project budget</th>
                                <th>Project Starting Date</th>
                                <th>Project Submission Date</th>
                                <th>Project Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->name}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->budget}}</td>
                                <td>{{$project->starting_date}}</td>
                                <td>{{$project->submission_date}}</td>
                                <td>

                                    @if ($project->status == "0")
                                    <span class="bg-primary px-2 py-1 text-white rounded-sm">Active</span>
                                    @else
                                    <span class="bg-danger px-2 py-1 text-white rounded-sm">Inactive</span>
                                    @endif
                                </td>
                                
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('project.edit', $project) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('project.destroy', $project) }}" method="POST" class="d-inline">
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
