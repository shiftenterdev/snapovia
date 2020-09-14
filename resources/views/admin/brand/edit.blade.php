@extends('admin.layouts.app')
@section('title','Update Brand | ')
@section('content')

    <x-admin.header title="Edit Brand"/>

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.brand.update',$brand)}}" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <x-admin.form.input name="name" label="Name" required="required" :value="$brand->name"/>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="photo">Logo</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="logo">
                                                <label class="custom-file-label" for="customFile"></label>
                                            </div>
                                            @if($brand->logo)
                                                <hr/>
                                                <a href="{{ $brand->logo->url }}" target="_blank">
                                                    <img src="{{ $brand->logo->thumbnail }}" class="img-thumbnail" alt="Brand Image">
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <x-admin.form.textarea name="description" label="Description" :value="$brand->description"/>

                                </div>
                                <hr>
                                <x-admin.form.button name="Update"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('adminhtml/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>

        $(document).ready(function () {
            bsCustomFileInput.init();
            tinymce.init({
                selector: "textarea.editor",
                menubar: false,
                branding: false,
                statusbar: false,
                toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist",
            });
        });
    </script>
@endsection
