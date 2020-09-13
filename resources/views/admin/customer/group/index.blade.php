@extends('admin.layouts.app')

@section('content')

    <x-admin.header title="Customer Group">
        <a href="{{route('admin.customer.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Customer Group
        </a>
    </x-admin.header>

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
                                    <th>Group</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customerGroups as $key => $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            <a href="{{route('admin.group.edit',$item->id)}}" class="text-muted">
                                                <i class="fas fa-pen"></i>
                                            </a> &nbsp;
                                            <a href="{{route('admin.group.destroy',$item->id)}}" class="text-muted">
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
