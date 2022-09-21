@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Contributor</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Contributor Add</h5>
                <a href="{{ route('admin.contributor.create') }}" class="btn btn-primary">Add Contributor</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>ID</th>
                                <th>Contributor Name</th>
                                <th>Books</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Serial</th>
                                <th>Contributor Name</th>
                                <th>Books</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($contributors as $key=>$contributor)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$contributor->id}}</td>
                                <td>{{$contributor->name}}</td>
                                <td>{{$contributor->books->name}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.contributor.edit', ['id'=>$contributor->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
