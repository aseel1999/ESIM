@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>ِAdmin</h5>
                    <span>The List of all Admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3> Admin</h3>
            </div>
            <div class="card-body">

                    <table id="data_table" class="table  table-responsive">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>{{ trans('main.name') }}</th>
                                <th>{{ trans('main.Email') }}</th>
                                <th>{{ trans('main.Password') }}</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($admins as $key => $admin)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->password}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection