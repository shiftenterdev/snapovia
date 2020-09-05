<div>
    @if(isset($cart->items) && count($cart->items))


            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Header-->
            <div class="modal-header line-height-fixed font-size-lg mini-cart-count" data-count="{{count($cart->items)}}">
                <strong class="mx-auto">{{__('Your Cart')}} ({{count($cart->items)}})</strong>
            </div>


            <ul class="list-group list-group-lg list-group-flush">
                @foreach($cart->items as $product)
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-4">

                                <!-- Image -->
                                <a href="{{$product->product->url_key}}">
                                    <img class="img-fluid" src="{{$product->product->sample_image}}" alt="{{$product->product->name}}">
                                </a>

                            </div>
                            <div class="col-8">

                                <!-- Title -->
                                <p class="font-size-sm font-weight-bold mb-6">
                                    <a class="text-body" href="{{$product->product->url_key}}">{{$product->name}}</a> <br>
                                    <span class="text-muted">${{amount($product->price)}}</span>
                                </p>

                                <!--Footer -->
                                <div class="d-flex align-items-center">

                                    <!-- Select -->
                                    <input type="number" class="form-control input-qty" value="{{$product->qty}}">

                                    <!-- Remove -->
                                    <a class="font-size-xs text-gray-400 ml-auto" wire:click="removeFromCart({{$product->sku}})" href="javascript:">
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
                <strong>{{__("Subtotal")}}</strong> <strong class="ml-auto">${{amount($cart->grand_total)}}</strong>
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
