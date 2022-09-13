@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Skills</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Skill Add</h5>
                <a href="{{ route('skill.create') }}" class="btn btn-primary">Add Skill</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Skills Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Skills Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($skills as $skill)
                            <tr>
                                <td>{{$skill->id}}</td>
                                <td>{{$skill->name}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('skill.edit', $skill) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('skill.destroy', $skill) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
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
