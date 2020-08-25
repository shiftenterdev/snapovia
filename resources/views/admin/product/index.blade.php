@extends('admin.layouts.app')
@section('title','Product | ')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{route('admin.product.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> New Product
                        </a>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card data-filter">
                        <div class="card-header border-0 bg-gradient-info">
                            <h3 class="card-title"><strong>Filter</strong></h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.product.index')}}" method="GET">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Sku</label>
                                            <input type="text" value="{{request('sku')}}" name="sku" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" value="{{request('name')}}" name="name" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Visibility</label>
                                            <select name="visibility" class="form-control form-control-sm" id="">
                                                <option value="">Select</option>
                                                <option value="1" {{request('visibility')==1?'selected':''}}>Not Visible</option>
                                                <option value="2" {{request('visibility')==2?'selected':''}}>Catalog</option>
                                                <option value="3" {{request('visibility')==3?'selected':''}}>Search</option>
                                                <option value="4" {{request('visibility')==4?'selected':''}}>Catalog, Search</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Status </label>
                                            <select name="status" class="form-control form-control-sm" id="">
                                                <option value="">Select</option>
                                                <option value="1" {{request('status')==1?'selected':''}}>Active</option>
                                                <option value="0" {{request('status')=='0'?'selected':''}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <a href="{{route('admin.product.index')}}" class="btn btn-warning btn-sm">Reset</a>
                                            <button type="submit" class="btn btn-info btn-sm">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-0 bg-gradient-info d-flex p-0">
                            <h3 class="card-title p-3"><strong>Products</strong></h3>
                            <div class="p-2 ml-auto">
                                <button type="button" class="btn btn-default show-filter">
                                    <i class="fas fa-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                        <table class="table table-striped table-valign-middle">
                            <thead class="bg-dark">
                            <tr>
                                <th>ID</th>
                                <th>Sku</th>
                                <th>Thumbnail</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Special Price</th>
                                <th>Visibility</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>
                                        <img src="{{$product->defaultImage}}" alt="" class="img-thumbnail" width="80px">
                                    </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->product_type}}</td>
                                    <td>{!! status($product->status) !!}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>{{$product->price/100}}</td>
                                    <td>{{$product->special_price/100}}</td>
                                    <td>{!! visibility($product->visibility) !!}</td>
                                    <td>
                                        <a href="{{route('admin.product.edit',$product->id)}}" class="text-muted">
                                            <i class="fas fa-pen"></i>
                                        </a> &nbsp;
                                        <a href="{{route('admin.product.destroy',$product->id)}}" class="text-muted">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer clearfix flex">
                            <div>Showing {{($products->currentpage()-1)*$products->perpage()+1}} to {{$products->currentpage()*$products->perpage()}}
                                of  {{$products->total()}} entries
                            </div>
                            {{$products->appends(request()->query())->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection