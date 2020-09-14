@extends('admin.layouts.app')
@section('title','Create Product | ')
@section('content')

    <x-admin.header title="New Product">
        <button type="button" class="btn btn-warning" onclick="history.back()">Cancel</button>
        <button type="submit" form="newProductForm" class="btn btn-info">{{$name??'Save'}}</button>
    </x-admin.header>

    <div class="content">
        <div class="container-fluid">
            <form action="{{route('admin.product.create')}}" id="newProductForm" method="post" autocomplete="off"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="hidden" value="0" name="status">
                                                <input type="checkbox" class="custom-control-input" id="status"
                                                       value="1" name="status" checked>
                                                <label class="custom-control-label" for="status">Active</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm"
                                                   placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Sku</label>
                                            <input type="text" name="sku" class="form-control form-control-sm"
                                                   placeholder="Sku" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="text" name="price" class="form-control form-control-sm"
                                                   placeholder="Price" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Special Price</label>
                                            <input type="text" name="special_price" class="form-control form-control-sm"
                                                   placeholder="Special Price" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Special Price From</label>
                                            <input type="date" name="special_price_from"
                                                   class="form-control form-control-sm"
                                                   placeholder="Special Price From" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Special Price To</label>
                                            <input type="date" name="special_price_to"
                                                   class="form-control form-control-sm"
                                                   placeholder="Special Price To" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-3">
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
                                    <div class="w-100"></div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Quantity</label>
                                            <input type="number" name="qty" class="form-control form-control-sm"
                                                   placeholder="Quantity" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-6">
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

                        @if(count($attributes))
                            <div class="card">
                                <x-admin.card.title title="Attributes"/>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($attributes as $attribute)
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">{{$attribute->name}}</label>
                                                    @if($attribute->attribute_field_type=='text')
                                                        <input type="text" name="{{$attribute->slug}}"
                                                               class="form-control form-control-sm">
                                                    @elseif($attribute->attribute_field_type=='select')
                                                        <select name="{{$attribute->slug}}"
                                                                class="form-control form-control-sm" id="">
                                                            <option value="">Select</option>
                                                            @foreach($attribute->options as $option)
                                                                <option
                                                                        value="{{$option->id}}">{{$option->option_value}}</option>
                                                            @endforeach
                                                        </select>
                                                    @elseif($attribute->attribute_field_type=='textarea')
                                                        <textarea name="short_description"
                                                                  class="form-control form-control-sm editor"
                                                                  placeholder="Short Description"></textarea>
                                                    @elseif($attribute->attribute_field_type=='radio')
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card">
                            <x-admin.card.title title="Configuration"/>
                        </div>

                        <div class="card">
                            <x-admin.card.title title="Media"/>
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
                            <x-admin.card.title title="Description"/>
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
                            <x-admin.card.title title="Meta Information"/>
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

@section('style')
    <link rel="stylesheet" href="{{asset('adminhtml/plugins/select2/css/select2.min.css')}}">
@endsection

@section('script')
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('adminhtml/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('.select2').select2();

        let editor_config = {
            path_absolute: "/",
            branding: false,
            statusbar: false,
            menubar: false,
            selector: "textarea.editor",
            plugins: ["image link"],
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
