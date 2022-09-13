@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Skills</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add Skill</h5>
            <a href="{{ route('skill.index') }}" class="btn btn-primary">Show Skill</a>
        </div>
        <div class="card-body">
            <form action="{{ route('skill.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Skill Name</label>
                    <input type="text" class="form-control" placeholder="Enter Skill Name" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
