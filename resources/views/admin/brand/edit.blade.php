@extends('admin.layouts.app')
@section('title','Update Brand | ')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Brands</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.brand.update',$brand->id)}}" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Update Brand</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm"
                                                   placeholder="Name" value="{{$brand->name}}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group" id="holder">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="lfm" data-name="logo" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-sm btn-outline-info">Upload Image
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control form-control-sm editor"
                                                      placeholder="Description">{{$brand->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" onclick="history.back()">Cancel
                                    </button>
                                    <button type="submit" class="btn btn-info">Update</button>
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
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection