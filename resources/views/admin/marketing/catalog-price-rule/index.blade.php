@extends('admin.layouts.app')

@section('content')
    <x-admin-header title="Catalog Price Rules">
        <a href="{{route('admin.catalog-price-rule.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Rule
        </a>
    </x-admin-header>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0 radius-top ">
                            <table class="table table-striped table-valign-middle">
                                <thead class="bg-gradient-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Discount</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($catalogPricePules as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
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
                                <x-admin.pagination :collection="$catalogPricePules"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
