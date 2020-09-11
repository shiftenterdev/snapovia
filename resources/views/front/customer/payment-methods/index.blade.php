@extends('front.layouts.default')
@section('title','My Payment Methods | ')
@section('content')

    <x-front.breadcrumb>
        <li class="breadcrumb-item">
            <a class="text-gray-400" href="{{route('customer.info')}}">{{__('Customer')}}</a>
        </li>
        <x-slot name="active">
            {{__('Payment Methods')}}
        </x-slot>
    </x-front.breadcrumb>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-10">{{__('Payment Methods')}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    @include('front.customer.partials.menu')
                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card card-lg bg-light mb-8">
                                <div class="card-body">
                                    <h6 class="mb-6">
                                        Debit / Credit Card
                                    </h6>
                                    <p class="mb-5">
                                        <strong>Card Number:</strong> <br>
                                        <span class="text-muted">4242 ∙∙∙∙ ∙∙∙∙ 7856 (Mastercard)</span>
                                    </p>

                                    <!-- Text -->
                                    <p class="mb-5">
                                        <strong>Expiry Date:</strong> <br>
                                        <span class="text-muted">Feb 2022</span>
                                    </p>

                                    <!-- Text -->
                                    <p class="mb-0">
                                        <strong>Name on Card:</strong> <br>
                                        <span class="text-muted">Daniel Robinson</span>
                                    </p>

                                    <!-- Action -->
                                    <div class="card-action card-action-right">

                                        <!-- Button -->
                                        <a class="btn btn-xs btn-circle btn-white-primary" href="{{route('customer.payment-method.edit',1)}}">
                                            <i class="fe fe-edit-2"></i>
                                        </a>

                                        <!-- Button -->
                                        <button class="btn btn-xs btn-circle btn-white-primary">
                                            <i class="fe fe-x"></i>
                                        </button>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <a class="btn btn-block btn-lg btn-outline-border" href="{{route('customer.payment-method.create')}}">
                                Add Payment Method <i class="fe fe-plus"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
