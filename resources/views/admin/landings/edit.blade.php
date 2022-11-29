@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>Landing Page</h5>
                        <span>update landingPage</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('landing_pages.index') }}">LandingPage</a></li>
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
                    <h3>Add landing_page</h3>
                </div>
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('landing_pages.edit') }}" method="post"
                        enctype="multipart/form-data">@csrf
                        <div class="row">
                        <div class="col-lg-6">
                                <label for="">{{ trans('main.Text') }}</label>
                                <input type="text" name="hide_text" class="form-control @error('hide_text') is-invalid @enderror"
                                    value="{{$landing_page->hide_text }}">
                                @error('hide_text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                    <label >{{ trans('main.logo') }}</label>
                                    <input type="file" name="logo"
                                        class="form-control file-upload-info @error('imagepackage') is-invalid @enderror"
                                        placeholder="Upload Image" name="logo" value="{{$landing_page->logo }}">
                                        <span class="input-group-append">
                                        </span>
                                    @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.hide_description') }}</label>
                                <input type="text" name="hide_description"
                                    class="form-control" value="{{ $landing_page->hide_description }}" @error('hide_description') is-invalid @enderror">
                                @error('hide_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.About Title') }}</label>
                                <input type="text" name="about_title"
                                    class="form-control"value="{{$landing_page->about_title }}"  @error('about_title') is-invalid @enderror">
                                @error('about_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>   

                            
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.About First') }}</label>
                                <input type="text" name="about_first"
                                    class="form-control"value="{{ $landing_page->about_first }}" @error('about_first') is-invalid @enderror">
                                @error('about_first')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.{{ trans('main.Available Text') }}') }}</label>
                                <input type="text" name="about_last"
                                    class="form-control"value="{{ $landing_page->about_last }}" @error('about_last') is-invalid @enderror">
                                @error('about_last')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.About Title') }}</label>
                                <input type="text" name="about_title"
                                    class="form-control"value="{{ $landing_page->about_title}}" @error('about_title') is-invalid @enderror">
                                @error('about_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label >{{ trans('main.Image') }}</label>
                                <input type="file" name="file_image"
                                    class="form-control file-upload-info"value="{{ $landing_page->file_image }}"@error('file_image') is-invalid @enderror"
                                    placeholder="Upload Image" name="file_image">
                                    <span class="input-group-append">
                                    </span>
                                @error('file_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.yearsofexperience') }}</label>
                                <input type="text" name="yearsofexperience"
                                    class="form-control"value="{{ $landing_page->yearsofexperience}}" @error('yearsofexperience') is-invalid @enderror">
                                @error('yearsofexperience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.experience') }}</label>
                                <input type="text" name="experience"
                                    class="form-control"value="{{ $landing_page->experience }}" @error('experience') is-invalid @enderror">
                                @error('experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <label for="">{{ trans('main.Available Text') }}</label>
                                <input type="text" name="available_text"
                                    class="form-control"value="{{ $landing_page->available_text}}" @error('available_text') is-invalid @enderror">
                                @error('available_text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{ trans('main.Available Lorem') }}</label>
                                    <input type="text" name="available_lorem"
                                        class="form-control"value="{{ $landing_page->available_lorem }}" @error('available_lorem') is-invalid @enderror">
                                    @error('available_lorem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label >{{ trans('main.Activate') }}</label>
                                <input type="file" name="activate" value="{{ $landing_page->activate}}"
                                    class="form-control file-upload-info"@error('activate') is-invalid @enderror
                                    placeholder="Upload Image" name="activate">
                                    <span class="input-group-append">
                                    </span>
                                @error('activate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="col-lg-6">
                            <label >{{  trans('main.Image')}}</label>
                            <input type="file" name="image"value="{{ $landing_page->image }}"
                                class="form-control file-upload-info @error('image') is-invalid @enderror"
                                placeholder="Upload Image" name="image">
                                <span class="input-group-append">
                                </span>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label >{{ trans('main.Phone') }}</label>
                            <input type="number" name="phone"value="{{ $landing_page->phone }}"
                                class="form-control file-upload-info @error('phone') is-invalid @enderror"
                                placeholder="Upload Image" name="phone">
                                <span class="input-group-append">
                                </span>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="col-lg-6">
                                <label >{{  trans('main.email')}}</label>
                            <input type="email" name="email"value="{{ $landing_page->email}}"
                                class="form-control file-upload-info @error('email') is-invalid @enderror"
                                placeholder="Upload Image" name="email">
                                <span class="input-group-append">
                                </span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label >{{ trans('main.Location') }}</label>
                            <input type="text" name="location"value="{{ $landing_page->location }}"
                                class="form-control file-upload-info @error('location') is-invalid @enderror"
                                placeholder="Upload Image" name="location">
                                <span class="input-group-append">
                                </span>
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="col-l-6">
                                <label >{{ trans('main.Image') }}</label>
                            <input type="file" name="file_path"value="{{ $landing_page->file_path }}"
                                class="form-control file-upload-info @error('file_path') is-invalid @enderror"
                                placeholder="Upload Image" name="file_path">
                                <span class="input-group-append">
                                </span>
                            @error('file_path')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-l-6">
                                <label >{{ trans('main.contactImage') }}</label>
                            <input type="file" name="contact"value="{{ $landing_page->contact }}"
                                class="form-control file-upload-info @error('contact') is-invalid @enderror"
                                placeholder="Upload Image" name="contact">
                                <span class="input-group-append">
                                </span>
                            @error('contact')
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
