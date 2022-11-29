@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Packages</h5>
                    <span>Update package</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
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
                <h3>Edit package</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('packages.update', $pakage->id) }}" method="post"
                    enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">{{ trans('main.Data') }}</label>
                            <input type="text" name="data" class="form-control @error('data') is-invalid @enderror"
                                value="{{ $pakage->data }}">
                            @error('data')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">{{ trans('main.validity') }}</label>
                            <input type="text" name="validity" class="form-control @error('validity') is-invalid @enderror"
                                value="{{ $pakage->validity }}">
                            @error('validity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">{{ trans('main.price') }}</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                                value="{{ $pakage->price }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">{{ trans('main.quantity') }}</label>
                            <input type="number" name="quantity"
                                class="form-control @error('quantity') is-invalid @enderror"
                                value="{{ $pakage->quantity }}">
                            @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ trans('main.Image') }}</label>
                                <input type="file" name="imagepackage"
                                    class="form-control file-upload-info @error('imagepackage') is-invalid @enderror"
                                    placeholder="Upload Image" value="{{ $pakage->imagepackage }}">
                                <span class="input-group-append">
                                </span>
                                @error('imagepackage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection