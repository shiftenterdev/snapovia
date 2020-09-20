@extends('admin.layouts.app')
@section('title','Edit Cms Page | ')
@section('content')

    <x-admin-header title="Edit Page">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Update</button>
        <button type="button" class="btn btn-default" onclick="history.back()">Go Back</button>
    </x-admin-header>

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.cms-page.update',$page->id)}}" method="post" autocomplete="off"
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
                                                       value="1" name="status" {{$page->status==1?'checked':''}}>
                                                <label class="custom-control-label" for="status">Active</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control form-control-sm"
                                                   placeholder="Name" value="{{$page->title}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Content Heading</label>
                                            <input type="text" name="content_heading" class="form-control form-control-sm"
                                                   placeholder="Content Heading" value="{{$page->content_heading}}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Content</label>
                                            <textarea name="content" class="form-control form-control-sm editor"
                                                      placeholder="Description">{{$page->content}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 d-flex bg-gradient-gray">
                                <h3 class="card-title p-3"><strong>SEO</strong></h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Url key</label>
                                            <input type="text" class="form-control form-control-sm" name="url_key"
                                                   placeholder="Url key" value="{{$page->url_key}}">
                                        </div>
                                    </div>

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

@section('script')
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        let editor_config = {
            path_absolute: "/",
            selector: "textarea.editor",
            branding: false,
            statusbar: false,
            menubar: false,
            plugins: [
                "autolink lists link image hr anchor",
                "wordcount visualblocks visualchars code",
                "insertdatetime table directionality",
                "emoticons paste textcolor textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                let cmsURL = editor_config.path_absolute + 'filemanager?field_name=' + field_name;
                if (type === 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection
