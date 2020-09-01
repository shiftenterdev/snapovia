<div>
    <div class="flash-alert" wire:loading wire:target="addToCart">
        Adding to cart ....
    </div>
    <!-- Header -->
    <div class="row align-items-center mb-7">
        <div class="col-12 col-md">

            <!-- Heading -->
            <h3 class="mb-1">{{$categoryTitle}}</h3>

            <!-- Breadcrumb -->
            <ol class="breadcrumb mb-md-0 font-size-xs text-gray-400">
                <li class="breadcrumb-item">
                    <a class="text-gray-400" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    {{$categoryTitle}}
                </li>
            </ol>

        </div>
        <div class="col-12 col-md-auto">

            <!-- Select -->
            <select class="custom-select custom-select-xs" wire:model="sort_by">
                <option value="name_asc">Most popular</option>
                <option value="price_asc">Price ascending</option>
                <option value="price_desc">Price descending</option>
            </select>

        </div>
    </div>

    <!-- Tags -->
    <div class="row mb-7">
        <div class="col-12" hidden>

                <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Shift dresses <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Summer <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  M <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  White <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Red <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Adidas <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  $10.00 - $49.00 <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  $50.00 - $99.00 <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>

        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-6 col-md-4">

                <!-- Card -->
                <div class="card mb-7">

                    <!-- Badge -->
                    <div class="badge badge-white card-badge card-badge-left text-uppercase">
                        New
                    </div>

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Image -->
                        <a href="/{{$product->url_key}}">

                            <img class="card-img-top card-img-front"
                                 src="{{$product->sample_image}}" alt="...">
                        </a>

                        <!-- Actions -->
                        <div class="card-actions">
                          <span class="card-action">
                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="modal"
                                    data-target="#modalProduct">
                              <i class="fe fe-eye"></i>
                            </button>
                          </span>
                            <span class="card-action">
                            <button wire:click="addToCart({{$product->sku}})" class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-shopping-cart"></i>
                            </button>
                          </span>
                            <span class="card-action">
                            <a href="{{route('add.to.wishlist',$product->sku)}}" class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-heart"></i>
                            </a>
                          </span>
                        </div>

                    </div>

                    <!-- Body -->
                    <div class="card-body px-0">

                        <!-- Category -->
                        <div class="font-size-xs">
                            <a class="text-muted"
                               href="/{{$product->categories[0]->url_key}}">{{$product->categories[0]->name}}</a>
                        </div>

                        <!-- Title -->
                        <div class="font-weight-bold">
                            <a class="text-body" href="/{{$product->url_key}}">
                                {{$product->name}}
                            </a>
                        </div>

                        <!-- Price -->
                        <div class="font-weight-bold text-muted">
                            ${{amount($product->price)}}
                        </div>

                    </div>

                </div>

            </div>
        @endforeach
    </div>

    <!-- Pagination -->

    <nav class="d-flex justify-content-center justify-content-md-end">
        {!! $products->links() !!}
    </nav>
</div>
