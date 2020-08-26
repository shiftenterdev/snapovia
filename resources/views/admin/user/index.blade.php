@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.user.create')}}" class="btn btn-dark">
                        <i class="fas fa-plus"></i> New User
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header p-0 d-flex bg-gradient-info">
                                <h3 class="card-title p-3"><strong>Users</strong></h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->roles[0]->name}}</td>
                                            <td>
                                                <a href="{{route('admin.user.edit',$user->uuid)}}" class="text-muted">
                                                    <i class="fas fa-pen"></i>
                                                </a> &nbsp;
                                                <a href="{{route('admin.user.destroy',$user->uuid)}}" class="text-muted">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix flex">
                                <div>Showing {{($users->currentpage()-1)*$users->perpage()+1}} to {{$users->currentpage()*$users->perpage()}}
                                    of  {{$users->total()}} entries
                                </div>
                                {{$users->appends(request()->query())->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection