@extends('admin.layouts.app')
@section('title','Create Role | ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Permission</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Permission</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Permission</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-12">
                                    <form action="{{route('admin.permission.update',$permission)}}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="{{$permission->name}}" class="form-control" placeholder="Permission name">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update Permission</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection