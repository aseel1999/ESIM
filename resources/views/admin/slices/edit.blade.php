@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Slices</h5>
                    <span>Update Slice</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('slices.index') }}">Slice</a></li>
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
                <h3>Edit slice</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('slices.update',$slice->id) }}" method="post"
                    enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">{{ trans('main.Name') }}</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ $customer->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ trans('main.Image') }}</label>
                                <input type="file" name="image"
                                    class="form-control file-upload-info @error('image') is-invalid @enderror"
                                    placeholder="Upload Image" value="{{ asset('/images'.$slice->image) }}">
                                <span class="input-group-append">
                                </span>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="exampleTextarea1">{{ trans('main.Description') }}</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                id="exampleTextarea1" rows="4" name="description">{{ $slice->description }}
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> 
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