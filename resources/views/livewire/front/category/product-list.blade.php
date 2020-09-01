<div>
    <div class="flash-alert" wire:loading wire:target="addToCart">
        Adding to cart ....
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
                            {{$product->price}}
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
