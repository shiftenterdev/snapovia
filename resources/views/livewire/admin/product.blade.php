<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Product ID</label>
                                    <input type="text" wire:model.lazy="search.id"
                                           class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Sku</label>
                                    <input type="text" wire:model.lazy="search.sku"
                                           class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" wire:model.lazy="search.name"
                                           class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" wire:model.lazy="search.price"
                                           class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Visibility</label>
                                    <select wire:model.lazy="search.visibility" name="visibility"
                                            class="form-control form-control-sm" id="">
                                        <option value="">Select</option>
                                        <option value="1">Not
                                            Visible
                                        </option>
                                        <option value="2">Catalog
                                        </option>
                                        <option value="3">Search
                                        </option>
                                        <option value="4">Catalog,
                                            Search
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Product Type </label>
                                    <select wire:model.lazy="search.product_type" class="form-control form-control-sm"
                                            id="">
                                        <option value="">Select</option>
                                        <option value="simple">simple</option>
                                        <option value="configurable">configurable
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Status </label>
                                    <select wire:model.lazy="search.status" name="status"
                                            class="form-control form-control-sm" id="">
                                        <option value="">Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="button" wire:click="resetSearch" class="btn btn-warning btn-sm">
                                        Reset
                                    </button>
                                    <button type="button" class="btn btn-info btn-sm"><i class="fas fa-filter"></i>
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body table-responsive p-0 radius-top">
                        <table class="table table-striped table-valign-middle">
                            <thead class="bg-dark">
                            <tr>
                                <th><i class="fas fa-caret-up"></i> ID</th>
                                <th><i class="fas fa-caret-up"></i> Sku</th>
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
                                        @if($product->base_image)
                                            <a href="{{$product->base_image->url}}" target="_blank">
                                                <img src="{{$product->base_image->thumbnail}}" alt=""
                                                     class="img-thumbnail"
                                                     width="50px">
                                            </a>
                                        @else
                                            <img src="{{$product->sample_image}}" alt="" class="img-thumbnail"
                                                 width="80px">
                                        @endif
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
                                        <a href="{{route('admin.product.destroy',$product->id)}}"
                                           class="text-muted">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <x-admin.pagination :collection="$products"/>
            </div>
        </div>
    </div>
</div>

