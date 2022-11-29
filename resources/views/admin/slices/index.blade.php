@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Slices</h5>
                        <span>List of All Slices</span>
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
                            <a href="#">Slices</a>
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
            <form action="{{ route('slices.index') }}" method="GET">

                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                        </div>
                    </form>
            <div class="card">
                <div class="card-body ">
                    <table  class="table table-responsive">
                        <thead>
                            <tr>
                                <th>{{ trans('main.Name') }}</th>
                                <th>{{ trans('main.Description') }}</th>
                                <th>{{ trans('main.Image') }}</th>
                                 <th>{{ trans('main.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($slices) > 0)
                                @foreach ($slices as $slice)
                                    <tr>
                                        <td>{{ $slice->name }}</td>
                                        <td>{{ $slice->description}}</td>
                                        <td><img src="{{asset($slice->image)}}" class="table-user-thumb"
                                            width="40">
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('slices.edit', $slice->id) }}"><i
                                                    class="btn btn-warning ik ik-edit-2"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                                {{ $slices->appends(request()->query())->links() }}
                            @else
                                <td>No Slice to display</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
  
@endsection
