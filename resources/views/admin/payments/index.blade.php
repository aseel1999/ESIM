@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Payments</h5>
                        <span>List of All Payments</span>
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
                            <a href="#">Payments</a>
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
                                <th>ID#</th>
                                <th>{{ trans('main.name') }}</th>
                                <th>{{ trans('main.image') }}</th>
                                 <th>{{ trans('main.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($type_payments) > 0)
                                @foreach ($type_payments as $type_payment)
                                    <tr>
                                        <td>{{ $type_payment->id }}</td>
                                        <td>{{ $type_payment->name}}</td>
                                        <td><img src="{{asset($type_payment->image)}}" class="table-user-thumb"
                                            width="40">
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('type_payments.edit', $type_payment->id) }}"><i
                                                        class="btn btn-warning ik ik-edit-2"></i></a>
                                                        <form action="{{ route('type_payments.destroy', $type_payment->id) }}" method="post" style="display: inline-block">
                                                            {{ csrf_field() }}
                                                            {{ method_field('delete') }}
                                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> {{ trans('main.delete') }}</button>
                                                        </form>
                                                          
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                        </tbody>
                    </table>
                    @else
                    <h>No typePayment to display<h>
                         @endif
                </div>
            </div>
        </div>
    </div>
    
       
@endsection
