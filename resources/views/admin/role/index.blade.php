@extends('admin.layouts.app')

@section('content')
    <x-admin.header title="Roles">
        <a href="{{route('admin.role.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> New Role
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
                        <th>User</th>
                        <th>Permissions</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $key => $role)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                                @foreach($role->users as $user)
                                    <span class="badge badge-info">{{$user->email}}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($role->permissions as $user)
                                    <span class="badge badge-warning">{{$user->name}}</span>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{route('admin.role.edit',$role->id)}}" class="text-muted">
                                    <i class="fas fa-pen"></i>
                                </a> &nbsp;
                                <a href="{{route('admin.role.destroy',$role->id)}}" class="text-muted">
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
