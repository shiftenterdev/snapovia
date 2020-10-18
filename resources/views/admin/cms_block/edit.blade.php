@extends('admin.layouts.app')
@section('title','Update Cms Block | ')
@section('content')

    <x-admin-header title="Create Block">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Update</button>
        <button type="button" class="btn btn-default" onclick="history.back()">Go Back</button>
    </x-admin-header>

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.cms-block.update',$block->id)}}" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header p-0 d-flex bg-gradient-info">
                                <h3 class="card-title p-3"><strong>Edit Cms Page</strong></h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="hidden" value="0" name="status">
                                                <input type="checkbox" class="custom-control-input" id="status"
                                                       value="1" name="status" {{$block->status==1?'checked':""}}>
                                                <label class="custom-control-label" for="status">Active</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control form-control-sm"
                                                   placeholder="Name" value="{{$block->title}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Identifier</label>
                                            <input type="text" name="identifier" class="form-control form-control-sm"
                                                   placeholder="Identifier" value="{{$block->identifier}}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Content</label>
                                            <textarea name="content" class="form-control form-control-sm editor"
                                                      placeholder="Description">{{$block->content}}</textarea>
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
            branding: false,
            statusbar: false,
            menubar: false,
            selector: "textarea.editor",
            plugins: [
                "autolink lists link image hr anchor",
                "wordcount visualblocks visualchars code",
                "insertdatetime table directionality",
                "emoticons paste textcolor textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image",
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
