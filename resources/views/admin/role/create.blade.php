@extends('admin.layouts.app')
@section('title','Create Role | ')
@section('content')
    <x-admin-header title="New Roles">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Save</button>
        <button type="button" class="btn btn-default" onclick="history.back()">Go Back</button>
    </x-admin-header>

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Role</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-12">
                                    <form action="{{route('admin.role.create')}}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Role name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Permissions</label>
                                            <div class="checkbox">
                                                @foreach($permissions as $permission)
                                                    <label for="">
                                                        <input type="checkbox" value="{{$permission->name}}" name="permissions[]"> {{$permission->name}}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save Role</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
