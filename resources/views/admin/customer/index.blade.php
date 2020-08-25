@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.customer.create')}}" class="btn btn-info">
                        <i class="fas fa-plus"></i> New Customer
                    </a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Customer</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0 bg-gradient-info d-flex p-0">
                                <h3 class="card-title p-3"><strong>Customers</strong></h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customers as $key => $c)
                                        <tr>
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->first_name}}</td>
                                            <td>{{$c->last_name}}</td>
                                            <td>{{$c->gender}}</td>
                                            <td>{{$c->user->email}}</td>
                                            <td>{{$c->country}}</td>
                                            <td>
                                                <a href="{{route('admin.customer.edit',$c->id)}}" class="text-muted">
                                                    <i class="fas fa-pen"></i>
                                                </a> &nbsp;
                                                <a href="{{route('admin.customer.destroy',$c->id)}}" class="text-muted">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix flex">
                                <div>Showing {{($customers->currentpage()-1)*$customers->perpage()+1}} to {{$customers->currentpage()*$customers->perpage()}}
                                    of  {{$customers->total()}} entries
                                </div>
                                {{$customers->appends(request()->query())->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection