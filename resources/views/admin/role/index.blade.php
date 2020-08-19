@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Role</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Role</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Roles</h3>
                                <div class="card-tools">
                                    <a href="{{route('admin.role.create')}}" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-plus"></i> New Role
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>User</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $key => $role)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                @foreach($role->users as $user)
                                                    <span class="badge badge-info">{{$user->email}}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($role->permissions as $user)
                                                    <span class="badge badge-warning">{{$user->name}}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{route('admin.role.edit',$role->id)}}" class="text-muted">
                                                    <i class="fas fa-pen"></i>
                                                </a> &nbsp;
                                                <a href="{{route('admin.role.destroy',$role->id)}}" class="text-muted">
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
    </div>
@endsection