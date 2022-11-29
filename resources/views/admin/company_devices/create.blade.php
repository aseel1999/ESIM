@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>CompanyDevices</h5>
                    <span>add companyDevice</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('company_devices.index') }}">Company_device</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">
        @if (Session::has('message'))
        <div class="alert bg-success alert-success text-white text-center" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Add CompanyDevice</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('company_devices.store') }}" method="post"
                    enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">{{ trans('main.Name') }}</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        
                        
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
                        </div>
            </div>

        </form>
    </div>
</div>
@endsection