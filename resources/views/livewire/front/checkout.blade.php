<div>
    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-4">{{__('Checkout')}}</h3>
                    @if(!Customer::check())
                        <p class="mb-10">
                            {{__('Already have an account')}}?
                            <a class="font-weight-bold text-reset"
                               data-toggle="modal"
                               href="#modalCustomerLogin">{{__('Click here to login')}}</a>
                        </p>
                        <div class="modal fade" id="modalCustomerLogin" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <livewire:front.checkout.login/>
                            </div>
                        </div>

                    @endif
                </div>
                @if(session()->has('error'))
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Success</strong> {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12 col-md-7">

                    <!-- Form -->
                    <form method="post" autocomplete="off" action="{{route('checkout.submit')}}" id="orderSubmit">

                    @csrf

                    <!-- Heading -->
                        <h6 class="mb-7">{{__('Billing Details')}}</h6>

                        <!-- Billing details -->
                        <div class="row mb-9">
                            @if(Customer::check())
                                @foreach(Customer::user()->address as $address)
                                    <div class="col-12 col-lg-6">
                                        <div class="card card-lg bg-light mb-8">
                                            <div class="card-body">
                                                <p class="text-muted mb-0">
                                                    {{$address->first_name.' '.$address->last_name}} <br>
                                                    {{$address->address_line_1}} <br>
                                                    {{$address->city}} <br>
                                                    {{$address->postcode}} <br>
                                                    {{$address->country}} <br>
                                                    {{$address->telephone}}
                                                </p>
                                                <div class="card-action card-action-right">
                                                    <button class="btn btn-xs btn-circle btn-white-primary" type="button">
                                                        <i class="fe fe-check"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="checkoutBillingEmail">{{__('Email')}} *</label>
                                        <input class="form-control form-control-sm" id="checkoutBillingEmail"
                                               type="email"
                                               placeholder="Email" wire:model.blur="email" required=""
                                               name="email">
                                    </div>

                                </div>

                                @if($guest_notify)
                                    <div class="col-12">
                                        <div class="alert alert-info">{!! $guest_notify !!}</div>
                                    </div>
                                @endif
                            @endif
                        </div>
                        <div class="row mb-9">
                            <div class="col-12 col-md-6">

                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="checkoutBillingFirstName">{{__('First Name')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingFirstName"
                                           type="text" placeholder="First Name" name="shipping[first_name]"
                                           value="{{Customer::user()->first_name ?? ''}}" required="">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="checkoutBillingLastName">{{__('Last Name')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingLastName" type="text"
                                           placeholder="Last Name" required="" name="shipping[last_name]"
                                           value="{{Customer::user()->last_name ?? ''}}">
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

                                <!-- Address Line 1 -->
                                <div class="form-group">
                                    <label for="checkoutBillingAddress">{{__('Address Line')}} 1 *</label>
                                    <input class="form-control form-control-sm" name="shipping[address_line_1]"
                                           id="checkoutBillingAddress" type="text"
                                           placeholder="Address Line 1" required="">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Address Line 2 -->
                                <div class="form-group">
                                    <label for="checkoutBillingAddressTwo">{{__('Address Line')}} 2</label>
                                    <input class="form-control form-control-sm" name="shipping[address_line_2]"
                                           id="checkoutBillingAddressTwo"
                                           type="text" placeholder="Address Line 2 (optional)">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Town / City -->
                                <div class="form-group">
                                    <label for="checkoutBillingTown">{{__('City')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingTown" type="text"
                                           placeholder="Town / City" required="" name="shipping[city]">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- ZIP / Postcode -->
                                <div class="form-group">
                                    <label for="checkoutBillingZIP">{{__('Postcode')}} *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingZIP" type="text"
                                           placeholder="ZIP / Postcode" required="required" name="shipping[postcode]">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Country -->
                                <div class="form-group">
                                    <label for="checkoutBillingCountry">{{__('Country')}} *</label>
                                    <select name="shipping[country]" class="form-control form-control-sm" required
                                            id="checkoutBillingCountry">
                                        @foreach(get_all_countries() as $country)
                                            <option value="{{$country->iso}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="form-group mb-0">
                                    <label for="checkoutBillingPhone">{{__('Mobile Phone')}} *</label>
                                    <input class="form-control form-control-sm" name="shipping[mobile]"
                                           id="checkoutBillingPhone" type="tel"
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
                                @foreach($shippingMethods as $shippingMethod)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" value="{{$shippingMethod->id}}"
                                                       id="checkoutShippingStandard{{$loop->iteration}}"
                                                       name="shipping_method_id" type="radio" wire:model.live="shipping_id">
                                                <label class="custom-control-label text-body text-nowrap"
                                                       for="checkoutShippingStandard{{$loop->iteration}}">
                                                    {{__($shippingMethod->title)}}
                                                </label>
                                            </div>
                                        </td>
                                        <td>{!! $shippingMethod->description !!}</td>
                                        <td>${{$shippingMethod->amount}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Address -->
                        <div class="mb-9">

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="hidden" value="0" name="different_shipping_address">
                                <input class="custom-control-input" id="checkoutShippingAddress" type="checkbox"
                                       value="1" name="different_shipping_address">
                                <label class="custom-control-label font-size-sm" data-toggle="collapse"
                                       data-target="#checkoutShippingAddressCollapse" for="checkoutShippingAddress">
                                    {{__('Ship to a different address')}}?
                                </label>
                            </div>

                            <!-- Collapse -->
                            <div class="collapse" id="checkoutShippingAddressCollapse">
                                <div class="row mt-6">

                                    <div class="col-12 col-md-6">

                                        <!-- First Name -->
                                        <div class="form-group">
                                            <label for="checkoutBillingFirstName">{{__('First Name')}} *</label>
                                            <input class="form-control form-control-sm" id="checkoutBillingFirstName"
                                                   type="text" placeholder="First Name" name="billing[first_name]"
                                                   value="{{Customer::user()->first_name ?? ''}}">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">

                                        <!-- Last Name -->
                                        <div class="form-group">
                                            <label for="checkoutBillingLastName">{{__('Last Name')}} *</label>
                                            <input class="form-control form-control-sm" id="checkoutBillingLastName"
                                                   type="text"
                                                   placeholder="Last Name" name="billing[last_name]"
                                                   value="{{Customer::user()->last_name ?? ''}}">
                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <!-- Address Line 1 -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressLineOne">Address Line 1 *</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressLineOne" type="text"
                                                   placeholder="Address Line 1" name="billing[address_line_1]">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Address Line 2 -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressLineTwo">Address Line 2</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressLineTwo" type="text"
                                                   placeholder="Address Line 2 (optional)"
                                                   name="billing[address_line_2]">
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <!-- Town / City -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressTown">Town / City *</label>
                                            <input class="form-control form-control-sm" id="checkoutShippingAddressTown"
                                                   type="text" placeholder="Town / City" name="billing[city]">
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <!-- Town / City -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressZIP">ZIP / Postcode *</label>
                                            <input class="form-control form-control-sm" id="checkoutShippingAddressZIP"
                                                   type="text" placeholder="ZIP / Postcode" name="billing[postcode]">
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6">

                                        <!-- Country -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressCountry">Country *</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressCountry" type="text"
                                                   placeholder="Country" name="billing[country]">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">

                                        <!-- Country -->
                                        <div class="form-group">
                                            <label for="checkoutShippingAddressCountry">Telephone *</label>
                                            <input class="form-control form-control-sm"
                                                   id="checkoutShippingAddressCountry" type="text"
                                                   placeholder="Telephone" name="billing[mobile]">
                                        </div>

                                    </div>
                                    @if(Customer::check())
                                        <div class="col-12">

                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="save_this_address">
                                                <input class="custom-control-input" id="saveThisAddress" value="1"
                                                       name="save_this_address" type="checkbox">
                                                <label class="custom-control-label font-size-sm" data-toggle="collapse"
                                                       for="saveThisAddress">
                                                    {{__('Save this address')}}?
                                                </label>
                                            </div>

                                        </div>
                                    @endif
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
                                    <input class="custom-control-input" id="checkoutPaymentCard" name="payment_method"
                                           type="radio" data-toggle="collapse" wire:model.live="payment_method"
                                           data-action="hide" value="card"
                                           data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap"
                                           for="checkoutPaymentCard">
                                        Debit/Credit Card <img class="ml-2"
                                                               src="{{asset('frontend/assets/img/brands/color/cards.svg')}}"
                                                               alt="...">
                                    </label>

                                </div>

                            </div>
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="custom-control custom-radio">

                                    <!-- Input -->
                                    <input class="custom-control-input" id="checkoutPaymentPaypal" name="payment_method"
                                           type="radio" data-toggle="collapse" wire:model.live="payment_method"
                                           data-action="hide" value="paypal"
                                           data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap"
                                           for="checkoutPaymentPaypal">
                                        <img src="{{asset('frontend/assets/img/brands/color/paypal.svg')}}" alt="...">
                                    </label>

                                </div>

                            </div>
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="custom-control custom-radio">

                                    <!-- Input -->
                                    <input class="custom-control-input" id="checkoutCOD" name="payment_method"
                                           type="radio"
                                           data-toggle="collapse" wire:model.live="payment_method" data-action="hide"
                                           value="cod"
                                           data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap"
                                           for="checkoutCOD">
                                        <img src="{{asset('frontend/assets/img/brands/color/cod.webp')}}"
                                             alt="{{__('Cash on delivery')}}"
                                             style="height: 25px"> {{__('Cash on delivery')}}
                                    </label>

                                </div>

                            </div>
                        </div>

                        <!-- Notes -->
                        <textarea class="form-control form-control-sm mb-9 mb-md-0 font-size-xs" name="order_notes"
                                  rows="5"
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
                                            Qty: {{$product->qty}} <br>
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
                                            class="ml-auto font-size-sm">${{$sub_total}}</span>
                                </li>
                                @if($tax)
                                    <li class="list-group-item d-flex">
                                        <span>{{__('Subtotal incl Tax')}}</span> <span
                                                class="ml-auto font-size-sm">${{$sub_total_incl_tax}}</span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>{{__('Tax('.$tax.'%)')}}</span> <span
                                                class="ml-auto font-size-sm">${{$tax_amount}}</span>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex">
                                    <span>{{__('Shipping')}}</span> <span
                                            class="ml-auto font-size-sm">${{$shipping_amount}}</span>
                                </li>
                                <li class="list-group-item d-flex font-size-lg font-weight-bold">
                                    <span>{{__('Total')}}</span> <span
                                            class="ml-auto">${{$grand_total_incl_tax}}</span>
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


                    <button class="btn btn-block btn-dark" form="orderSubmit" type="submit">
                        {{__('Place Order')}}
                    </button>


                </div>
            </div>
        </div>
    </section>
</div>
