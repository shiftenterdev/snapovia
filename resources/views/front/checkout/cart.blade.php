@extends('front.layouts.default')
@section('title','Shopping Cart | ')
@section('content')

    <x-front.page.breadcrumb title="Shopping Cart"/>

    <livewire:front.checkout-cart/>

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
