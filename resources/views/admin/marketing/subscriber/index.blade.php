@extends('admin.layouts.app')
@section('title','Subscribers | ')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.email-template.create')}}" class="btn btn-dark">
                        <i class="fas fa-send"></i> Send Newsletter
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0 bg-gradient-info d-flex p-0">
                                <h3 class="card-title p-3"><strong>Subscribers</strong></h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subscribers as $subcriber)
                                        <tr>
                                            <td>{{$subcriber->id}}</td>
                                            <td>{{$subcriber->email}}</td>
                                            <td><a href="" class="btn btn-sm btn-default">Newsletter</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer clearfix flex">
                                    <x-admin.pagination :collection="$subscribers"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
