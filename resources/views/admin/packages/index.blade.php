@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Packages</h5>
                        <span>List of All Packages</span>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-16">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Packages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-30">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white text-center" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            
            <div class="card">
                <div class="card-body ">
                    <table id="data_table" class="table table-responsive">
                        <thead>
                            <tr>
                                <th>{{ trans('main.ID') }}</th>
                                <th>{{ trans('main.data') }}</th>
                                <th>{{ trans('main.validity') }}</th>
                                <th>{{ trans('main.price') }}</th>
                                <th>{{ trans('main.quantity') }}</th>
                                 <th>{{ trans('main.imagepackage') }}</th>
                                 <th>{{ trans('main.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($pakages) > 0)
                                @foreach ($pakages as $pakage)
                                    <tr>
                                        <td>{{ $pakage->id }}</td>
                                        <td>{{ $pakage->data }}</td>
                                        <td>{{ $pakage->validity }}</td>
                                        <td>{{ $pakage->price }}</td>
                                        <td>{{ $pakage->quantity }}</td>
                                        <td><img src="{{asset($pakage->imagepackage)}}" class="table-user-thumb"
                                            width="40">
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('packages.edit', $pakage->id) }}"><i
                                                        class="btn btn-warning ik ik-edit-2"></i></a>
                                                          
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                {{ $pakages->appends(request()->query())->links() }}

                        </tbody>
                    </table>
                    @else
                    <h>No pakage to display<h>
                         @endif
                </div>
            </div>
        </div>
    </div>
    
       
@endsection
