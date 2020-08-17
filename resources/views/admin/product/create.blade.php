@extends('admin.layouts.app')
@section('title','Create Product | ')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.product.create')}}" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">New Product</h3>
                            </div>
                            <div class="card-body table-responsive">
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
                                            <label for="">Sku</label>
                                            <input type="text" name="sku" class="form-control form-control-sm"
                                                   placeholder="Sku" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="text" name="price" class="form-control form-control-sm"
                                                   placeholder="Price" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Special Price</label>
                                            <input type="text" name="special_price" class="form-control form-control-sm"
                                                   placeholder="Special Price" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Special Price From</label>
                                            <input type="date" name="special_price_from" class="form-control form-control-sm"
                                                   placeholder="Special Price From" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Special Price To</label>
                                            <input type="date" name="special_price_to" class="form-control form-control-sm"
                                                   placeholder="Special Price To" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Stock Status</label>
                                            <div class="custom-control custom-switch">
                                                <input type="hidden" value="0" name="status">
                                                <input type="checkbox" class="custom-control-input" id="stockStatus"
                                                       value="1" name="status" checked>
                                                <label class="custom-control-label" for="stockStatus">In Stock</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Quantity</label>
                                            <input type="number" name="qty" class="form-control form-control-sm"
                                                   placeholder="Quantity" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="category_id" multiple id="" data-placeholder="Select Category"
                                                    class="form-control form-control-sm select2">
                                                @foreach($categories as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Image</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group" id="holder">
{{--                                            <input type="hidden" id="thumbnail" class="form-control form-control-sm"--}}
{{--                                                   name="image" placeholder="Image">--}}
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-sm btn-outline-info">Upload Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Description</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Short Description</label>
                                            <textarea name="short_description"
                                                      class="form-control form-control-sm editor"
                                                      placeholder="Short Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control form-control-sm editor"
                                                      placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Meta</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control form-control-sm"
                                                   placeholder="Meta Title" required>
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
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <script>
        let editor_config = {
            path_absolute: "/",
            selector: "textarea.editor",
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
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('image');
        $('.select2').select2();
    </script>
@endsection