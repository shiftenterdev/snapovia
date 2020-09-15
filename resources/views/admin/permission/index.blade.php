@extends('admin.layouts.app')
@section('title','Permissions | ')
@section('content')
    <x-admin.header title="Permissions">
    </x-admin.header>
    <x-admin.content>
        <div class="card">
            <div class="card-body table-responsive p-0 radius-top">
                <table class="table table-striped table-valign-middle">
                    <thead class="bg-gray-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $key => $permission)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$permission->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.content>
@endsection
