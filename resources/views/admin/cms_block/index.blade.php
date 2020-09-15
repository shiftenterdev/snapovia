@extends('admin.layouts.app')

@section('title','Cms Block | ')

@section('content')

    <x-admin.header title="CMS Block">
        <a href="{{route('admin.cms-block.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Block
        </a>
    </x-admin.header>

    <x-admin.content>
        <div class="card">
            <div class="card-body table-responsive p-0 radius-top">
                <table class="table table-striped table-valign-middle">
                    <thead class="bg-gray-dark">
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
    </x-admin.content>
@endsection
