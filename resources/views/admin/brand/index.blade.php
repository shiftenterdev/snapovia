@extends('admin.partials.app')
@section('title','Brand | ')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Brand List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Brand</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.brand.create')}}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-plus"></i> New Brand
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Identifier</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $key => $c)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$c->name}}</td>
                                        <td><img src="{{$c->logo}}" class="img-circle img-size-32 mr-2" alt=""></td>
                                        <td>{{$c->identifier}}</td>
                                        <td>
                                            <a href="{{route('admin.brand.edit',$c->id)}}" class="text-muted">
                                                <i class="fas fa-pen"></i>
                                            </a> &nbsp;
                                            <a href="{{route('admin.brand.delete',$c->id)}}" class="text-muted">
                                                <i class="fas fa-trash"></i>
                                            </a>
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