@extends('admin.layouts.app')

@section('content')
    <x-admin-header title="Cart Price Rules">
        <a href="{{route('admin.cart-price-rule.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Rule
        </a>
    </x-admin-header>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0 radius-top">
                            <table class="table table-striped table-valign-middle">
                                <thead class="bg-gray-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Coupon</th>
                                    <th>Max</th>
                                    <th>Discount</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartPrices as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->coupon_code}}</td>
                                        <td>{{$item->max_use}}</td>
                                        <td>{{$item->discount_amount}}</td>
                                        <td>{{$item->discount_type}}</td>
                                        <td>{{$item->status==1?'Active':'Inactive'}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer clearfix flex">
                                <x-admin.pagination :collection="$cartPrices"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
