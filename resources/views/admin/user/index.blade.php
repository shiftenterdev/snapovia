@extends('admin.layouts.app')

@section('content')

    <x-admin.header title="Users">
        <a href="{{route('admin.user.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New User
        </a>
    </x-admin.header>

    <x-admin.content>
        <div class="card">
            <div class="card-body table-responsive p-0 radius-top">
                <table class="table table-striped table-valign-middle">
                    <thead class="bg-gray-dark">
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

        </div>
        <div class="clearfix flex">
            <x-admin.pagination :collection="$users"/>
        </div>
    </x-admin.content>

@endsection
