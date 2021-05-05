@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Prospects') }}</div>

                    <div class="card-body">
                       <h1> <small class="text-muted">Showing all Prospects</small></h1>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Create</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                        <hr>

{{--                        @if ($prospects->count() )--}}
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>created</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>created</th>
                                    <th>actions</th>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
