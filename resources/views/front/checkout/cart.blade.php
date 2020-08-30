@extends('front.layouts.default')
@section('title','Shopping Cart | ')
@section('content')
    <nav class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb mb-0 font-size-xs text-gray-400">
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="{{route('welcome')}}">{{__('Home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('Shopping Cart')}}
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h3 class="mb-10 text-center">{{__('Shopping Cart')}}</h3>

                </div>
            </div>
            <div class="row">
                @if(count($cartItems))
                    <div class="col-12 col-md-7">

                        <!-- List group -->
                        <ul class="list-group list-group-lg list-group-flush-x mb-6 cart-page-list">
                            @foreach($cart->items as $product)
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3">

                                            <!-- Image -->
                                            <a href="{{$product->product->url_key}}">
                                                <img src="{{$product->product->small_image->url}}" alt="{{$product->product->name}}" class="img-fluid">
                                            </a>

                                        </div>
                                        <div class="col">

                                            <!-- Title -->
                                            <div class="d-flex mb-2 font-weight-bold">
                                                <a class="text-body" href="{{$product->product->url_key}}">{{$product->product->name}}</a>
                                                <span class="ml-auto">${{$product->product->price->regularPrice->amount->value}}</span>
                                            </div>

                                            <!-- Text -->
                                            <p class="mb-7 font-size-sm text-muted">
                                                Size: M <br>
                                                Color: Red
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
                                                <a class="font-size-xs text-gray-400 ml-auto remove_from_cart" href="javascript:" data-item-id="{{$product->id}}">
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

                                <!-- Coupon -->
                                <form class="mb-7 mb-md-0">
                                    <label class="font-size-sm font-weight-bold" for="cartCouponCode">
                                        {{__('Coupon code')}}:
                                    </label>
                                    <div class="row form-row">
                                        <div class="col">

                                            <!-- Input -->
                                            <input class="form-control form-control-sm" id="cartCouponCode" type="text" placeholder="{{__('Enter coupon code')}}*">

                                        </div>
                                        <div class="col-auto">

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-dark" type="submit">
                                                {{__('Apply')}}
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-12 col-md-auto">

                                <!-- Button -->
                                <button class="btn btn-sm btn-outline-dark">{{__('Update Cart')}}</button>

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

                        <!-- Total -->
                        <div class="card mb-7 bg-light">
                            <div class="card-body">
                                <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                    <li class="list-group-item d-flex">
                                        <span>{{__('Subtotal')}}</span> <span class="ml-auto font-size-sm">${{$cart->prices->grand_total->value}}</span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>{{__('Tax')}}</span> <span class="ml-auto font-size-sm">$0</span>
                                    </li>
                                    <li class="list-group-item d-flex font-size-lg font-weight-bold">
                                        <span>{{__('Total')}}</span> <span class="ml-auto font-size-sm">${{$cart->prices->grand_total->value}}</span>
                                    </li>
                                    <li class="list-group-item font-size-sm text-center text-gray-500">
                                        {{__('Shipping cost calculated at Checkout')}} *
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Button -->
                        <a class="btn btn-block btn-dark mb-2" href="{{route('checkout')}}">{{__('Proceed to Checkout')}}</a>

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

    <section class="bg-light py-9">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-lg-0">

                        <!-- Icon -->
                        <i class="fe fe-truck font-size-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ml-6">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-1">
                                {{__('Free shipping')}}
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                {{__('From all orders over $100')}}
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-lg-0">

                        <!-- Icon -->
                        <i class="fe fe-repeat font-size-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ml-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                {{__('Free returns')}}
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                {{__('Return money within 30 days')}}
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-md-0">

                        <!-- Icon -->
                        <i class="fe fe-lock font-size-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ml-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                {{__('Secure shopping')}}
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                {{__('You\'re in safe hands')}}
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Icon -->
                        <i class="fe fe-tag font-size-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ml-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                {{__('Over 10,000 Styles')}}
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                {{__('We have everything you need')}}
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
