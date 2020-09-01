<div>
    <div class="flash-alert" wire:loading>
        Adding to cart ....
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6">

            <!-- Heading -->
            <h2 class="mb-4 text-center">{{__('Top month Sellers')}}</h2>

            <!-- Nav -->
            <div class="nav justify-content-center mb-10">
                <a class="nav-link active" href="#womenTab" data-toggle="tab">{{__('Women')}}</a>
                <a class="nav-link" href="#menTab" data-toggle="tab">{{__('Men')}}</a>
                <a class="nav-link" href="#gadgetTab" data-toggle="tab">{{__('Kids')}}</a>
            </div>

        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="womenTab">
            <div class="row">
                @foreach($women as $product)
                    <div class="col-6 col-md-4 col-lg-3">

                        <!-- Card -->
                        <div class="card mb-7">

                            <!-- Badge -->
                            <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                {{--                                    {{__('New')}}--}}
                            </div>

                            <!-- Image -->
                            <div class="card-img">

                                <!-- Image -->
                                <a class="" href="/{{$product->url_key}}">
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
                                    <button wire:click.prevent="addToCart({{$product->sku}})"
                                            class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                      <i class="fe fe-shopping-cart"></i>
                                    </button>
                                  </span>
                                    <span class="card-action">
                                    <a href="{{route('add.to.wishlist',$product->sku)}}"
                                       class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                      <i class="fe fe-heart"></i>
                                    </a>
                                  </span>
                                </div>

                            </div>

                            <!-- Body -->
                            <div class="card-body px-0">

                                <!-- Category -->
                                <div class="font-size-xs">
                                    <a class="text-muted" href="shop.html">Shoes</a>
                                </div>

                                <!-- Title -->
                                <div class="font-weight-bold">
                                    <a class="text-body" href="{{$product->url_key}}">
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
        </div>
        <div class="tab-pane fade show" id="menTab">
            <div class="row">
                @foreach($men as $product)
                    <div class="col-6 col-md-4 col-lg-3">

                        <!-- Card -->
                        <div class="card mb-7">

                            <!-- Badge -->
                            <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                {{--                                    {{__('New')}}--}}
                            </div>

                            <!-- Image -->
                            <div class="card-img">

                                <!-- Image -->
                                <a class="" href="/{{$product->url_key}}">
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
                            <button wire:click.prevent="addToCart({{$product->sku}})"
                                    class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-shopping-cart"></i>
                            </button>
                          </span>
                                    <span class="card-action">
                            <a href="{{route('add.to.wishlist',$product->sku)}}"
                               class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-heart"></i>
                            </a>
                          </span>
                                </div>

                            </div>

                            <!-- Body -->
                            <div class="card-body px-0">

                                <!-- Category -->
                                <div class="font-size-xs">
                                    <a class="text-muted" href="shop.html">Shoes</a>
                                </div>

                                <!-- Title -->
                                <div class="font-weight-bold">
                                    <a class="text-body" href="{{$product->url_key}}">
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
        </div>
        <div class="tab-pane fade show" id="gadgetTab">
            <div class="row">
                @foreach($gadget as $product)
                    <div class="col-6 col-md-4 col-lg-3">

                        <!-- Card -->
                        <div class="card mb-7">

                            <!-- Badge -->
                            <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                {{__('New')}}
                            </div>

                            <!-- Image -->
                            <div class="card-img">

                                <!-- Image -->
                                <a class="" href="/{{$product->url_key}}">
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
                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-shopping-cart"></i>
                            </button>
                          </span>
                                    <span class="card-action">
                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-heart"></i>
                            </button>
                          </span>
                                </div>

                            </div>

                            <!-- Body -->
                            <div class="card-body px-0">

                                <!-- Category -->
                                <div class="font-size-xs">
                                    <a class="text-muted" href="shop.html">Shoes</a>
                                </div>

                                <!-- Title -->
                                <div class="font-weight-bold">
                                    <a class="text-body" href="{{$product->url_key}}">
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
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <!-- Link  -->
            <div class="mt-7 text-center">
                <a class="link-underline" href="{{route('category')}}">{{__('Discover more')}}</a>
            </div>

        </div>
    </div>
</div>
