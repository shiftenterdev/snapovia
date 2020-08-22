@extends('admin.layouts.app')
@section('title','Brand | ')
@section('content')

    <x-admin.c-header title="Brand"/>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection