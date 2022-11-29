@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Orders</h5>
                        <span>List of All Orders</span>
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
                            <a href="#">Orders</a>
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
                                <th>{{ trans('main.firstname') }}</th>
                                <th>{{ trans('main.lastname') }}</th>
                                <th>{{ trans('main.passport') }}</th>
                                <th>{{ trans('main.discount') }}</th>
                                <th>{{ trans('main.pakage_id') }}</th>
                                <th>{{ trans('main.type_payment_id') }}</th>
                                <th>{{ trans('main.type') }}</th>
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($orders) > 0)
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->firstname}}</td>
                                        <td>{{ $order->lastname }}</td>
                                        <td>{{ $order->passport }}</td>
                                        <td>{{ $order->discount}}</td>
                                        <td>{{ @$order->package_id}}<td>
                                        </td>{{ @$order->type_payment_id	}}</td>
                                        <td>{{ $order->type}}</td>
                                      
                                        
                                    </tr>
                                @endforeach

                                {{ $orders->appends(request()->query())->links() }}

                        </tbody>
                    </table>
                    @else
                    <h>No orders to display<h>
                         @endif
                </div>
            </div>
        </div>
    </div>
    
       
@endsection
