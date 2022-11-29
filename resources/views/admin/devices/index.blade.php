@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Devices</h5>
                        <span>List of All Devices</span>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Devices</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white text-center" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card card-custom gutter-b">
                
                <div class="card-header border-0 py-5">
                    
                    <div class="card-toolbar d-inline-block">
                        <a href="{{ route('devices.create') }}" class="btn btn-info font-weight-bolder font-size-sm"> Add new device</a>
                        
        
                    </div>
        
                </div>
            </div>
            <div class="card">
                <div class="card-body ">
                    <table  class="table table-responsive">
                        <thead>
                            <tr>
                                <th>{{ trans('main.name') }}</th>
                                <th>{{ trans('main.Company') }}</th>
                                 <th>{{ trans('main.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($devices) > 0)
                                @foreach ($devices as $device)
                                    <tr>
                                        <td>{{ $device->name }}</td>
                                        <td>{{ @$device->company->name}}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('devices.edit', $device->id) }}"><i
                                                    class="btn btn-warning ik ik-edit-2"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                                
                            @else
                                <td>No device to display</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
  
@endsection
