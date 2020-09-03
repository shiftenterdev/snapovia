@extends('front.layouts.default')
@section('title','Checkout | ')
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
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="{{route('cart')}}">{{__('Shopping Cart')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('Checkout')}}
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-4">{{__('Checkout')}}</h3>
                    @if(!Customer::check())
                        <p class="mb-10">
                            {{__('Already have an account')}}? <a class="font-weight-bold text-reset"
                                                                  href="{{route('customer.login')}}?redirect=checkout">{{__('Click here to login')}}</a>
                        </p>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7">

                    <!-- Form -->
                    <form>

                        <!-- Heading -->
                        <h6 class="mb-7">{{__('Billing Details')}}</h6>

                        <!-- Billing details -->
                        <div class="row mb-9">
                            <div class="col-12 col-md-6">

                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="checkoutBillingFirstName">{{__('First Name')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingFirstName"
                                           type="text" placeholder="First Name" value="{{Customer::user()->first_name ?? ''}}" required="">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="checkoutBillingLastName">{{__('Last Name')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingLastName" type="text"
                                           placeholder="Last Name" required="" value="{{Customer::user()->last_name ?? ''}}">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="checkoutBillingEmail">{{__('Email')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingEmail" type="email"
                                           placeholder="Email" required="" value="{{Customer::user()->email ?? ''}}">
                                </div>

                            </div>
                            <div class="col-12 d-none">

                                <!-- Company Name -->
                                <div class="form-group">
                                    <label for="checkoutBillingCompany">{{__('Company name')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingCompany" type="text"
                                           placeholder="Company name (optional)">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Country -->
                                <div class="form-group">
                                    <label for="checkoutBillingCountry">{{__('Country')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingCountry" type="text"
                                           placeholder="{{__('Country')}}" required="" value="{{Customer::user()->country ?? ''}}">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Address Line 1 -->
                                <div class="form-group">
                                    <label for="checkoutBillingAddress">{{__('Address Line')}} 1 *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingAddress" type="text"
                                           placeholder="Address Line 1" required="">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Address Line 2 -->
                                <div class="form-group">
                                    <label for="checkoutBillingAddressTwo">{{__('Address Line')}} 2</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingAddressTwo"
                                           type="text" placeholder="Address Line 2 (optional)">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Town / City -->
                                <div class="form-group">
                                    <label for="checkoutBillingTown">{{__('City')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingTown" type="text"
                                           placeholder="Town / City" required="">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- ZIP / Postcode -->
                                <div class="form-group">
                                    <label for="checkoutBillingZIP">{{__('Postcode')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingZIP" type="text"
                                           placeholder="ZIP / Postcode" required="required">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Mobile Phone -->
                                <div class="form-group mb-0">
                                    <label for="checkoutBillingPhone">{{__('Mobile Phone')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingPhone" type="tel"
                                           placeholder="{{__('Mobile Phone')}}" required="required">
                                </div>

                            </div>
                        </div>

                        <!-- Heading -->
                        <h6 class="mb-7">{{__('Shipping Details')}}</h6>

                        <!-- Shipping details -->
                        <div class="table-responsive mb-6">
                            <table class="table table-bordered table-sm table-hover mb-0">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" id="checkoutShippingStandard"
                                                   name="shipping" type="radio">
                                            <label class="custom-control-label text-body text-nowrap"
                                                   for="checkoutShippingStandard">
                                                {{__('Standard Shipping')}}
                                            </label>
                                        </div>
                                    </td>
                                    <td>Delivery in 5 - 7 working days</td>
                                    <td>$8.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" id="checkoutShippingExpress"
                                                   name="shipping" type="radio">
                                            <label class="custom-control-label text-body text-nowrap"
                                                   for="checkoutShippingExpress">
                                                Express Shipping
                                            </label>
                                        </div>
                                    </td>
                                    <td>Delivery in 3 - 5 working days</td>
                                    <td>$12.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" id="checkoutShippingShort"
                                                   name="shipping" type="radio">
                                            <label class="custom-control-label text-body text-nowrap"
                                                   for="checkoutShippingShort">
                                                1 - 2 Shipping
                                            </label>
                                        </div>
                                    </td>
                                    <td>Delivery in 1 - 2 working days</td>
                                    <td>$18.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" id="checkoutShippingFree"
                                                   name="shipping" type="radio">
                                            <label class="custom-control-label text-body text-nowrap"
                                                   for="checkoutShippingFree">
                                                Free Shipping
                                            </label>
                                        </div>
                                    </td>
                                    <td>Living won't the He one every subdue
                                        meat replenish face was you morning
                                        firmament darkness.
                                    </td>
                                    <td>$0.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Address -->
                        <div class="mb-9">

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="checkoutShippingAddress" type="checkbox">
                                <label class="custom-control-label font-size-sm" data-toggle="collapse"
                                       data-target="#checkoutShippingAddressCollapse" for="checkoutShippingAddress">
                                    {{__('Ship to a different address')}}?
                                </label>
                            </div>

                            <!-- Collapse -->
                            <div class="collapse" id="checkoutShippingAddressCollapse">
                                <div class="row mt-6">
                                    <div class="col-12">

                                        <!-- Country -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressCountry">Country *</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressCountry" type="text"
                                                   placeholder="Country">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Address Line 1 -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressLineOne">Address Line 1 *</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressLineOne" type="text"
                                                   placeholder="Address Line 1">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Address Line 2 -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressLineTwo">Address Line 2</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressLineTwo" type="text"
                                                   placeholder="Address Line 2 (optional)">
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <!-- Town / City -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressTown">Town / City *</label>
                                            <input class="form-control form-control-sm" id="checkoutShippingAddressTown"
                                                   type="text" placeholder="Town / City">
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <!-- Town / City -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressZIP">ZIP / Postcode *</label>
                                            <input class="form-control form-control-sm" id="checkoutShippingAddressZIP"
                                                   type="text" placeholder="ZIP / Postcode">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-outline-dark" type="submit">
                                            Save Address
                                        </button>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- Heading -->
                        <h6 class="mb-7">{{__('Payment')}}</h6>

                        <!-- List group -->
                        <div class="list-group list-group-sm mb-7">
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="custom-control custom-radio">

                                    <!-- Input -->
                                    <input class="custom-control-input" id="checkoutPaymentCard" name="payment"
                                           type="radio" data-toggle="collapse" data-action="show"
                                           data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap"
                                           for="checkoutPaymentCard">
                                        Credit Card <img class="ml-2" src="frontend/assets/img/brands/color/cards.svg"
                                                         alt="...">
                                    </label>

                                </div>

                            </div>
                            <div class="list-group-item collapse py-0" id="checkoutPaymentCardCollapse">

                                <!-- Form -->
                                <div class="form-row py-5">
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label class="sr-only" for="checkoutPaymentCardNumber">Card Number</label>
                                            <input class="form-control form-control-sm" id="checkoutPaymentCardNumber"
                                                   type="text" placeholder="Card Number *" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label class="sr-only" for="checkoutPaymentCardName">Name on Card</label>
                                            <input class="form-control form-control-sm" id="checkoutPaymentCardName"
                                                   type="text" placeholder="Name on Card *" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group mb-md-0">
                                            <label class="sr-only" for="checkoutPaymentMonth">Month</label>
                                            <select class="custom-select custom-select-sm" id="checkoutPaymentMonth">
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group mb-md-0">
                                            <label class="sr-only" for="checkoutPaymentCardYear">Year</label>
                                            <select class="custom-select custom-select-sm" id="checkoutPaymentCardYear">
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="input-group input-group-merge">
                                            <input class="form-control form-control-sm" id="checkoutPaymentCardCVV"
                                                   type="text" placeholder="CVV *" required="">
                                            <div class="input-group-append">
                          <span class="input-group-text" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-content="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards."
                                data-original-title="" title="">
                            <i class="fe fe-help-circle"></i>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="custom-control custom-radio">

                                    <!-- Input -->
                                    <input class="custom-control-input" id="checkoutPaymentPaypal" name="payment"
                                           type="radio" data-toggle="collapse" data-action="hide"
                                           data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap"
                                           for="checkoutPaymentPaypal">
                                        <img src="frontend/assets/img/brands/color/paypal.svg" alt="...">
                                    </label>

                                </div>

                            </div>
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="custom-control custom-radio">

                                    <!-- Input -->
                                    <input class="custom-control-input" id="checkoutCOD" name="payment" type="radio"
                                           data-toggle="collapse" data-action="hide"
                                           data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap"
                                           for="checkoutCOD">
                                        <img src="frontend/assets/img/brands/color/cod.webp"
                                             alt="{{__('Cash on delivery')}}"
                                             style="height: 25px"> {{__('Cash on delivery')}}
                                    </label>

                                </div>

                            </div>
                        </div>

                        <!-- Notes -->
                        <textarea class="form-control form-control-sm mb-9 mb-md-0 font-size-xs" rows="5"
                                  placeholder="{{__('Order Notes (optional)')}}"></textarea>

                    </form>

                </div>
                <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

                    <!-- Heading -->
                    <h6 class="mb-7">{{__('Order Items')}} ({{count($cart->items)}})</h6>

                    <!-- Divider -->
                    <hr class="my-7">

                    <!-- List group -->
                    <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x mb-7">
                        @foreach($cart->items as $product)
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-4">

                                        <!-- Image -->
                                        <a href="{{$product->product->url_key}}">
                                            <img src="{{$product->product->sample_image}}"
                                                 alt="{{$product->product->name}}" class="img-fluid">
                                        </a>

                                    </div>
                                    <div class="col">

                                        <!-- Title -->
                                        <p class="mb-4 font-size-sm font-weight-bold">
                                            <a class="text-body"
                                               href="{{$product->product->url_key}}">{{$product->product->name}}</a>
                                            <br>
                                            <span class="text-muted">${{amount($product->product->price)}}</span>
                                        </p>

                                        <!-- Text -->
                                        <div class="font-size-sm text-muted">
                                            Size: M <br>
                                            Color: Red
                                        </div>

                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>

                    <!-- Card -->
                    <div class="card mb-9 bg-light">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex">
                                    <span>{{__('Subtotal')}}</span> <span
                                            class="ml-auto font-size-sm">${{amount($cart->grand_total)}}</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>{{__('Tax')}}</span> <span class="ml-auto font-size-sm">$0</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>{{__('Shipping')}}</span> <span class="ml-auto font-size-sm">$10.00</span>
                                </li>
                                <li class="list-group-item d-flex font-size-lg font-weight-bold">
                                    <span>{{__('Total')}}</span> <span
                                            class="ml-auto">${{amount($cart->grand_total_incl_tax)}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <p class="mb-7 font-size-xs text-gray-500">
                        {{__('Your personal data will be used to process your order, support
                        your experience throughout this website, and for other purposes
                        described in our privacy policy.')}}
                    </p>

                    <!-- Button -->
                    <button class="btn btn-block btn-dark">
                        {{__('Place Order')}}
                    </button>

                </div>
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
                                Free shipping
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                From all orders over $100
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
                                Free returns
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                Return money within 30 days
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
                                Secure shopping
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                You're in safe hands
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
                                Over 10,000 Styles
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 font-size-sm text-muted">
                                We have everything you need
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
