@extends('admin.layouts.app')

@section('content')

    <x-admin.header title="Orders">
        <a href="" class="btn btn-dark">
            <i class="fas fa-upload"></i> Export Order
        </a>
    </x-admin.header>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="get" autocomplete="off">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Order ID</label>
                                            <input type="text" name="order_id"
                                                   class="form-control form-control-sm"
                                                   value="{{request('order_id')}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" name="email"
                                                   class="form-control form-control-sm"
                                                   value="{{request('email')}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" name="status"
                                                   class="form-control form-control-sm" value="{{request('status')}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
                                            <button type="submit" class="btn btn-info btn-sm"><i
                                                        class="fas fa-filter"></i> Filter
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body table-responsive p-0 radius-top">
                            <table class="table table-striped table-valign-middle">
                                <thead class="bg-gray-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->order_id}}</td>
                                        <td>{{$order->customer_id==0?'Guest':$order->customer->first_name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->grand_total_incl_tax}}</td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
