@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Contact</h5>
                    <span>The List of all Contact</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
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
                <h3> Contact</h3>
            </div>
            <div class="card-body">

                    <table id="data_table" class="table  table-responsive">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>{{ trans('main.from') }}</th>
                                <th>{{   trans('main.email')}}</th>
                                <th>{{ trans('main.Message') }}</th>
                                <th>{{ trans('main.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contacts as $key => $contact)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
<!-- Button trigger modal -->
<!-- Button trigger modal -->


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