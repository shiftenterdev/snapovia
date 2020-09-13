@extends('admin.layouts.app')

@section('title','Cms Page | ')

@section('content')

    <x-admin.c-header title="CMS Page">
        <a href="{{route('admin.cms-page.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Page
        </a>
    </x-admin.c-header>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0 radius-top">
                            <table class="table table-striped table-valign-middle">
                                <thead class="bg-gray-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Url key</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $key => $c)
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->title}}</td>
                                        <td>{{$c->status==1?'Active':"Inactive"}}</td>
                                        <td>{{$c->url_key}}</td>
                                        <td>
                                            <a href="{{route('admin.cms-page.edit',$c->id)}}" class="text-muted">
                                                <i class="fas fa-pen"></i>
                                            </a> &nbsp;
                                            <a href="{{route('admin.cms-page.destroy',$c->id)}}" class="text-muted">
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
