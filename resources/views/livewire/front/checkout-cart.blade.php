<div>

    <div class="flash-alert" wire:loading wire:target="removeFromCart">
        Product removing from cart ....
    </div>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h3 class="mb-10 text-center">{{__('Shopping Cart')}}</h3>

                </div>
            </div>
            <div class="row">
                @if(count($cart->items))
                    <div class="col-12 col-md-7">

                        <!-- List group -->
                        <ul class="list-group list-group-lg list-group-flush-x mb-6 cart-page-list">
                            @foreach($cart->items as $product)
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3">

                                            <!-- Image -->
                                            <a href="{{$product->product->url_key}}">
                                                <img src="{{$product->product->sample_image}}"
                                                     alt="{{$product->product->name}}" class="img-fluid">
                                            </a>

                                        </div>
                                        <div class="col">

                                            <!-- Title -->
                                            <div class="d-flex mb-2 font-weight-bold">
                                                <a class="text-body"
                                                   href="{{$product->product->url_key}}">{{$product->product->name}}</a>
                                                <span class="ml-auto">${{amount($product->product->price)}}</span>
                                            </div>

                                            <!-- Text -->
                                            <p class="mb-7 font-size-sm text-muted">
                                                Size: M <br>
                                                Color: Red
                                            </p>

                                            <!--Footer -->
                                            <div class="d-flex align-items-center">

                                                <input type="number" class="form-control input-qty"
                                                       value="{{$product->qty}}">

                                                <!-- Remove -->
                                                <a class="font-size-xs text-gray-400 ml-auto"
                                                   wire:click="removeFromCart({{$product->sku}})" href="javascript:">
                                                    <i class="fe fe-x"></i> {{__('Remove')}}
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Footer -->
                        <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                            <div class="col-12 col-md-7">
                                <form class="mb-7 mb-md-0" wire:submit.prevent="applyCoupon">
                                    <label class="font-size-sm font-weight-bold" for="cartCouponCode">
                                        {{__('Coupon code')}}:
                                    </label>
                                    <div class="row form-row">
                                        <div class="col">
                                            <input class="form-control form-control-sm" wire:model="coupon_code"
                                                   id="cartCouponCode" type="text"
                                                   placeholder="{{__('Enter coupon code')}}*">

                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-sm btn-dark" type="submit">
                                                {{__('Apply')}}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 col-md-auto">
                                <button class="btn btn-sm btn-outline-dark">{{__('Update Cart')}}</button>
                            </div>
                            @if(session()->has('success'))
                                <div class="col-12 my-3">
                                    <div class="alert alert-info">
                                        {!! session('success') !!}
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1">
                        <div class="card mb-7 bg-light">
                            <div class="card-body">
                                <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                    <li class="list-group-item d-flex">
                                        <span>{{__('Subtotal')}}</span> <span
                                                class="ml-auto font-size-sm">${{amount($cart->grand_total)}}</span>
                                    </li>
                                    @if($coupon_amount)
                                        <li class="list-group-item d-flex">
                                            <span>{{__('Coupon Code: ').$coupon_code }}</span> <span
                                                    class="ml-auto font-size-sm">${{$coupon_amount}}</span>
                                        </li>
                                    @endif
                                    <li class="list-group-item d-flex">
                                        <span>{{__('Tax')}}</span> <span class="ml-auto font-size-sm">$0</span>
                                    </li>
                                    <li class="list-group-item d-flex font-size-lg font-weight-bold">
                                        <span>{{__('Total')}}</span> <span
                                                class="ml-auto font-size-sm">${{amount($cart->grand_total_incl_tax)}}</span>
                                    </li>
                                    <li class="list-group-item font-size-sm text-center text-gray-500">
                                        {{__('Shipping cost calculated at Checkout')}} *
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Button -->
                        <a class="btn btn-block btn-dark mb-2"
                           href="{{route('checkout')}}">{{__('Proceed to Checkout')}}</a>

                        <!-- Link -->
                        <a class="btn btn-link btn-sm px-0 text-body" href="{{route('welcome')}}">
                            <i class="fe fe-arrow-left mr-2"></i> {{__('Continue Shopping')}}
                        </a>

                    </div>
                @else
                    <div class="col-12 flex-grow-0 my-auto text-center">
                        <!-- Heading -->
                        <h6 class="mb-7 text-center">{{__('Your cart is empty')}} 😞</h6>

                        <!-- Button -->
                        <a class="btn btn-outline-dark" href="{{route('welcome')}}">
                            {{__('Continue Shopping')}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>
