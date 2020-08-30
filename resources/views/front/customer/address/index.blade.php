@extends('front.layouts.default')
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
                            {{__('Addresses')}}
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

                    <!-- Heading -->
                    <h3 class="mb-10">{{__('My Addresses')}}</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">

                    <!-- Nav -->
                    @include('front.customer.partials.menu')

                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">

                    <div class="row">

                        @foreach(Customer::user()->address as $address)
                        <div class="col-12 col-lg-6">

                            <!-- Card -->
                            <div class="card card-lg bg-light mb-8">
                                <div class="card-body">

                                    <!-- Heading -->
                                    <h6 class="mb-6">
                                        Billing Address
                                    </h6>

                                    <!-- Text -->
                                    <p class="text-muted mb-0">
                                        {{$address->first_name.' '.$address->last_name}} <br>
                                        {{$address->address_line_1}} <br>
                                        {{$address->city}} <br>
                                        {{$address->postcode}} <br>
                                        {{$address->country}} <br>
                                        {{$address->telephone}}
                                    </p>

                                    <!-- Action -->
                                    <div class="card-action card-action-right">

                                        <!-- Button -->
                                        <a class="btn btn-xs btn-circle btn-white-primary" href="{{route('customer.address.edit',$address->id)}}">
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
                        @endforeach
                        <div class="col-12">

                            <!-- Button -->
                            <a class="btn btn-block btn-lg btn-outline-border" href="{{route('customer.address.create')}}">
                                Add Address <i class="fe fe-plus"></i>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection