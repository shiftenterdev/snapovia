@extends('admin.layouts.app')
@section('title','Create Category | ')
@section('content')

    <x-admin.header title="Category">
        <button type="button" class="btn btn-default" onclick="history.back()">Cancel
        </button>
        <button type="submit" form="categoryForm" class="btn btn-dark">Save</button>
    </x-admin.header>

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.category.create')}}" id="categoryForm" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

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
                                                   placeholder="Name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Parent Category</label>
                                            <select name="parent_id" class="form-control form-control-sm" id="">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Url key</label>
                                            <input type="text" class="form-control form-control-sm" name="url_key"
                                                   placeholder="Url key" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group" id="holder">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="lfm" data-name="image" data-input="thumbnail"
                                                    data-preview="holder"
                                                    class="btn btn-sm btn-outline-info">Upload Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control form-control-sm editor"
                                                      placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
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
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('adminhtml/plugins/select2/css/select2.min.css')}}">
@endsection

@section('script')
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('adminhtml/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('.select2').select2();

        tinymce.init({
            selector: "textarea.editor",
            menubar: false,
            branding: false,
            statusbar: false,
        });
    </script>
@endsection
