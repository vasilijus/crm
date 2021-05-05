@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Prospects') }}</div>
                    <h1>Prospect Create</h1>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">View Dashboard</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                    <hr>

                    <form action="{{ route('admin.prospects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control"  >
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="">File Upload</label>
                            <input type="file" class="form-control-file" name="profile_image">
                        </div>
                        <button class="btn btn-primary float-right">Create Prospect</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
