@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>LandingPage</h5>
                    <span>The List of all LandingPage</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">LandingPage</a></li>
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
                <h3> LandingPage</h3>
            </div>
            <div class="card-body">

                    <table id="data_table" class="table  table-responsive">
                        <thead>
                            <tr>
                                <th>{{ trans('main.logo') }}</th>
                                <th>{{ trans('main.Text') }}</th>
                                <th>{{ trans('main.Description') }}</th>
                                <th>{{ trans('main.hideDescription') }}</th>
                                <th>{{ trans('main.About Title') }}</th>
                                <th>{{ trans('main.About First') }}</th>
                                <th>{{ trans('main.About Last') }}</th>
                                <th>{{ trans('main.Image') }}</th>
                                <th>{{ trans('main.yearsofexperience') }}</th>
                                <th>{{ trans('main.experience') }}</th>
                                <th>{{ trans('main.Available Text') }}</th>
                                <th>{{ trans('main.Available Lorem') }}</th>
                                <th>{{ trans('main.Activate') }}</th>
                                <th>{{ trans('main.Image') }}</th>
                                <th>{{ trans('main.Phone') }}</th>
                                <th>{{ trans('main.Email') }}</th>
                                <th>{{ trans('main.Location') }}</th>
                                <th>{{ trans('main.Contact') }}</th>
                                <th>{{ trans('main.Actions') }}</th>
                            </tr>
                            
                        </thead>
                        <tbody>

                            @foreach ($landing_pages as $landing_page)
                            <tr>
                                <td><img src="{{asset($landing_page->logo)}}" class="table-user-thumb"
                                    width="60"></td>
                                <td>{{$landing_page->hide_text}}</td>
                                <td>{{$landing_page->hide_description}}</td>
                                <td>{{$landing_page->about_title}}</td>
                                <td>{{$landing_page->about_first}}</td>
                                <td>{{$landing_page->about_last }}</td>
                                <td><img src="{{asset($landing_page->file_image)}}" class="table-user-thumb"
                                    width="60"></td>
                                <td>{{$landing_page->yearsofexperience}}</td>
                                <td>{{$landing_page->experience}}</td>
                                <td>{{$landing_page->available_text}}</td>
                                <td>{{$landing_page->available_lorem }}</td>
                                <td>{{  $landing_page->activate}}</td>
                                <td><img src="{{asset($landing_page->image)}}" class="table-user-thumb"
                                    width="60"></td>
                                <td>{{ $landing_page->customer_say }}</td>
                                <td>{{  $landing_page->phone}}</td>
                                <td>{{ $landing_page->email }}</td>
                                <td>{{ $landing_page->location }}</td>
                                <td><img src="{{asset($landing_page->file_path)}}" class="table-user-thumb"
                                    width="60"></td>
                                <td><img src="{{asset($landing_page->contact)}}" class="table-user-thumb"
                                    width="60"></td>
                                    <td>
                                        <div class="table-actions">
                                        <a href="{{ route('landing_pages.edit', $landing_page) }}"><i
                                            class="btn btn-warning ik ik-edit-2"></i></a>
                                        <!-- end of form -->
                                    </div>
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