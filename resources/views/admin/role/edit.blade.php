@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Project Role</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Role Edit</h5>
            <a href="{{ route('role.index') }}" class="btn btn-primary">Show Role</a>
        </div>
        <div class="card-body">
            <form action="{{ route('role.update', $role) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Role Name</label>
                    <input type="text" class="form-control" placeholder="Enter Project Role Name" name="name" value="{{$role->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
