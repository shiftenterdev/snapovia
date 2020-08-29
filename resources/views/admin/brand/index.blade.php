@extends('admin.layouts.app')
@section('title','Brand | ')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.brand.create')}}" class="btn btn-dark">
                        <i class="fas fa-plus"></i> New Brand
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0 bg-gradient-info d-flex p-0">
                            <h3 class="card-title p-3"><strong>Brand</strong></h3>
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
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->name}}</td>
                                        <td>
                                            @if($c->logo)
                                                <img src="{{ $c->logo->getUrl('thumb') }}" class="img-circle img-size-32 mr-2" alt="">
                                            @endif
                                        </td>
                                        <td>{{$c->identifier}}</td>
                                        <td>
                                            <a href="{{route('admin.brand.edit',$c->id)}}" class="text-muted">
                                                <i class="fas fa-pen"></i>
                                            </a> &nbsp;
                                            <a href="{{route('admin.brand.destroy',$c->id)}}" class="text-muted">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer flex clearfix">
                                <x-admin.pagination :collection="$brands"/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection