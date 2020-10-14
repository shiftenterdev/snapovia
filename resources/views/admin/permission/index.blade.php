@extends('admin.layouts.app')
@section('title','Permissions | ')
@section('content')
    <x-admin-header title="Permissions">
    </x-admin-header>
    <x-admin-table>
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
    </x-admin-table>
@endsection
