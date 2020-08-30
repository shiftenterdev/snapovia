<div>
    @if($response)


            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Header-->
            <div class="modal-header line-height-fixed font-size-lg mini-cart-count" data-count="{{count($response->items)}}">
                <strong class="mx-auto">{{__('Your Cart')}} ({{count($response)}})</strong>
            </div>

            <!-- List group -->
            <ul class="list-group list-group-lg list-group-flush">
                @foreach($response as $product)
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-4">

                                <!-- Image -->
                                <a href="{{$product->product->url_key}}">
                                    <img class="img-fluid" src="{{$product->product->small_image->url}}" alt="...">
                                </a>

                            </div>
                            <div class="col-8">

                                <!-- Title -->
                                <p class="font-size-sm font-weight-bold mb-6">
                                    <a class="text-body" href="{{$product->product->url_key}}">{{$product->product->name}}</a> <br>
                                    <span class="text-muted">${{$product->product->price->regularPrice->amount->value}}</span>
                                </p>

                                <!--Footer -->
                                <div class="d-flex align-items-center">

                                    <!-- Select -->
                                    <select class="custom-select custom-select-xxs w-auto mc-c-item-qty" data-item-id="{{$product->id}}">
                                        <option value="1" {{$product->quantity==1?'selected':""}}>1</option>
                                        <option value="2" {{$product->quantity==2?'selected':""}}>2</option>
                                        <option value="3" {{$product->quantity==3?'selected':""}}>3</option>
                                        <option value="4" {{$product->quantity==4?'selected':""}}>4</option>
                                        <option value="5" {{$product->quantity==5?'selected':""}}>5</option>
                                    </select>

                                    <!-- Remove -->
                                    <a class="font-size-xs text-gray-400 ml-auto remove_from_cart" data-item-id="{{$product->id}}" href="javascript:">
                                        <i class="fe fe-x"></i> {{__('Remove')}}
                                    </a>

                                </div>

                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <!-- Footer -->
            <div class="modal-footer line-height-fixed font-size-sm bg-light mt-auto">
                <strong>Subtotal</strong> <strong class="ml-auto">${{$response->prices->grand_total->value}}</strong>
            </div>

            <!-- Buttons -->
            <div class="modal-body">
                <a class="btn btn-block btn-dark" href="{{route('checkout')}}">{{__('Continue to Checkout')}}</a>
                <a class="btn btn-block btn-outline-dark" href="{{route('cart')}}">{{__('View Cart')}}</a>
            </div>


    @else


            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Header-->
            <div class="modal-header line-height-fixed font-size-lg">
                <strong class="mx-auto">{{__('Your Cart')}} (0)</strong>
            </div>

            <!-- Body -->
            <div class="modal-body flex-grow-0 my-auto">

                <!-- Heading -->
                <h6 class="mb-7 text-center">{{__('Your cart is empty')}} 😞</h6>

                <!-- Button -->
                <a class="btn btn-block btn-outline-dark" href="{{route('welcome')}}">
                    {{__('Continue Shopping')}}
                </a>

            </div>


    @endif
</div>
