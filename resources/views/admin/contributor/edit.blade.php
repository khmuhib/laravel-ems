@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Contributor</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Edit Contributor</h5>
            <a href="{{ route('admin.contributor.list') }}" class="btn btn-primary">Show Contributor</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contributor.update', ['id'=>$contributor->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @method('PUT')
                <div class="form-group">
                    <label>Contributor Name</label>
                    <input type="text" class="form-control" placeholder="Enter Contributor Name" name="name" value="{{$contributor->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
