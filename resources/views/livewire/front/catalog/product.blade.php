<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="badge badge-primary card-badge text-uppercase">
                                {{__('Sale')}}
                            </div>
                            <div class="mb-4" data-flickity='{"draggable": false, "fade": true}' id="productSlider">
                                <a href="{{$product->sample_image}}" data-fancybox>
                                    <img src="{{$product->sample_image}}" alt="..." class="card-img-top">
                                </a>
                            </div>

                        </div>

                        <!-- Slider -->
                        <!-- Slider -->
                        <div class="flickity-nav mx-n2 mb-10 mb-md-0"
                             data-flickity='{"asNavFor": "#productSlider", "contain": true, "wrapAround": false}'>
                            <!-- Item -->
                            <div class="col-12 px-2" style="max-width: 113px;">
                                <!-- Image -->
                                <div class="embed-responsive embed-responsive-1by1 bg-cover"
                                     style="background-image: url({{$product->sample_image}});"></div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-md-6 pl-lg-10">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success</strong> {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <div class="row mb-1">
                            <div class="col">
                                <a class="text-muted"
                                   href="/{{$product->categories[0]->url_key}}">{{$product->categories[0]->name}}</a>
                            </div>
                            <div class="col-auto">
                                <div class="rating font-size-xs text-dark" data-value="4">
                                    <div class="rating-item">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rating-item">
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <a class="font-size-sm text-reset ml-2" href="#reviews">
                                    {{__('Reviews')}} (6)
                                </a>
                            </div>
                        </div>

                        <!-- Heading -->
                        <h3 class="mb-2">{{$product->name}}</h3>

                        <!-- Price -->
                        <div class="mb-7">
                            @if($product->special_price > 0)
                                <span class="font-size-lg font-weight-bold text-gray-350 text-decoration-line-through">
                                    ${{amount($product->price)}}
                                </span>
                                <span class="ml-1 font-size-h5 font-weight-bolder text-primary">
                                    ${{amount($product->special_price)}}
                                </span>
                            @else
                                <span class="ml-1 font-size-h5 font-weight-bolder text-primary">
                                    ${{amount($product->price)}}
                                </span>
                            @endif

                            @if($product->qty > 0)
                                <span class="font-size-sm ml-1">({{__('In Stock')}})</span>
                            @else
                                <span class="font-size-sm ml-1 text-danger">({{__('Out of Stock')}})</span>
                            @endif
                        </div>

                        <!-- Form -->
                        <form method="post" id="addToCartForm" action="{{route('add.to.cart')}}">
                            @csrf
                            <input type="hidden" value="{{$product->sku}}" name="sku" id="productSku">
                            <div class="form-group">
                                <p class="mb-5">
                                    Vendor: <strong><span>Snapovia</span></strong>
                                </p>

                                @foreach($product->attributes as $key => $attribute)
                                    <p class="mb-5">
                                        {{ucfirst($attribute->name)}}: <strong><span
                                                    id="{{$key}}Caption">{{$attribute->options[0]->option_value}}</span></strong>
                                    </p>

                                    <div class="mb-2">
                                        @foreach($attribute->options as $k => $option)
                                            <div
                                                    class="custom-control custom-control-inline custom-control-size mb-2">
                                                <input type="radio" class="custom-control-input product-attribute"
                                                       name="{{$key}}Radio" id="{{$key}}Radio{{$k}}"
                                                       value="{{$option->id}}" data-toggle="form-caption"
                                                       data-target="#{{$key}}Caption" {{$k==0?'checked':""}}>
                                                <label class="custom-control-label"
                                                       for="{{$key}}Radio{{$k}}">{{$option->option_value}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                                @if(count($product->attributes))
                                    <p class="mb-8">
                                        <img src="{{asset('frontend/assets/img/icons/icon-ruler.svg')}}"
                                             alt="{{__('Size chart')}}"
                                             class="img-fluid"> <a
                                                class="text-reset text-decoration-underline ml-3"
                                                data-toggle="modal"
                                                href="#modalSizeChart">{{__('Size chart')}}</a>
                                    </p>
                                @endif

                                <div class="form-row mb-7">
                                    @if($product->qty > 0)
                                        <div class="col-12 col-lg-auto">
                                            <select class="custom-select mb-2" wire:model="qty" name="quantity"
                                                    id="productQty" required>
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>

                                        </div>
                                        <div class="col-12 col-lg">
                                            <button type="button"
                                                    class="btn btn-block btn-dark mb-2"
                                                    wire:click.prevent="addToCart({{$product->sku}})">
                                                {{__('Add to Cart')}} <i class="fe fe-shopping-cart ml-2"></i>
                                            </button>
                                        </div>
                                    @endif
                                    <div class="col-12 col-lg-auto">
                                        <a href="{{route('add.to.wishlist',$product->sku)}}"
                                           class="btn btn-outline-dark btn-block mb-2" data-toggle="button">
                                            {{__('Wishlist')}} <i class="fe fe-heart ml-2"></i>
                                        </a>
                                    </div>
                                </div>

                                @if(count($product->attributes))
                                    <p>
                                        <span class="text-gray-500">{{__('Is your size/color sold out')}}?</span>
                                        <a class="text-reset text-decoration-underline" data-toggle="modal"
                                           href="#modalWaitList">{{__('Join the Wait List')}}!</a>
                                    </p>
                                @endif

                                <p class="mb-0">
                                    <span class="mr-4">{{__('Share')}}:</span>
                                    <a class="btn btn-xxs btn-circle btn-light font-size-xxxs text-gray-350"
                                       href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-xxs btn-circle btn-light font-size-xxxs text-gray-350"
                                       href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-xxs btn-circle btn-light font-size-xxxs text-gray-350"
                                       href="#">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </p>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
