@extends('admin.layouts.app')
@section('title','Edit Category | ')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Category List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.category.update',$category->id)}}" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">New Category</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="hidden" value="0" name="status">
                                                <input type="checkbox" class="custom-control-input" id="status"
                                                       value="1" name="status" checked>
                                                <label class="custom-control-label" for="status">Active</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm"
                                                   placeholder="Name" required value="{{$category->name}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Parent Category</label>
                                            <select name="parent_id" class="form-control form-control-sm" id="">
                                                <option value="0">Select Category</option>
                                                @foreach($categories as $C)
                                                    <option value="{{$C->id}}" {{$category->parent_id==$C->id?'selected':""}}>{{$C->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Url key</label>
                                            <input type="text" class="form-control form-control-sm" name="url_key"
                                                   placeholder="Url key" value="{{$category->url_key}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Image</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group" id="holder">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="lfm" data-name="image" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-sm btn-outline-info">Upload Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Description</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control form-control-sm editor"
                                                      placeholder="Description">{{$category->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Meta</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control form-control-sm"
                                                   placeholder="Meta Title">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <textarea name="meta_description" class="form-control form-control-sm"
                                                      placeholder="Meta Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Meta Keywords</label>
                                            <textarea name="meta_description" class="form-control form-control-sm"
                                                      placeholder="Meta Keywords"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" onclick="history.back()">Cancel
                                    </button>
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')

@endsection