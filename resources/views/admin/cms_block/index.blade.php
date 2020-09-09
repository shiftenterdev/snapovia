@extends('admin.layouts.app')

@section('title','Cms Block | ')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('admin.cms-block.create')}}" class="btn btn-dark">
                        <i class="fas fa-plus"></i> New Block
                    </a>
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
                        <div class="card-header p-0 bg-gradient-info d-flex">
                            <h3 class="card-title p-3"><strong>CMS Block</strong></h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blocks as $key => $c)
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->title}}</td>
                                        <td>{{$c->status=='1'?"Active":"Inactive"}}</td>
                                        <td>
                                            <a href="{{route('admin.cms-block.edit',$c->id)}}" class="text-muted">
                                                <i class="fas fa-pen"></i>
                                            </a> &nbsp;
                                            <a href="{{route('admin.cms-block.delete',$c->id)}}" class="text-muted">
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
