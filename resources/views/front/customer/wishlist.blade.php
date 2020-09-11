@extends('front.layouts.default')
@section('title','My Wishlist | ')
@section('content')
    <x-front.breadcrumb>
        <li class="breadcrumb-item">
            <a class="text-gray-400" href="{{route('customer.info')}}">{{__('Customer')}}</a>
        </li>
        <x-slot name="active">
            {{__('Wishlist')}}
        </x-slot>
    </x-front.breadcrumb>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">


                    <h3 class="mb-10">{{__('My Wishlist')}}</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">


                    @include('front.customer.partials.menu')

                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">


                    <div class="row">

                        @if(!count(Customer::user()->wishlist))
                            <div class="col-12">
                                <div class="alert alert-warning">No items in your wishlist 😔</div>
                            </div>
                        @endif

                        @foreach(Customer::user()->wishlist as $product)
                            <div class="col-6 col-md-4">
                                <div class="card mb-7">

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Action -->
                                        <a href="{{route('remove.from.wishlist',$product->sku)}}"
                                           class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                            <i class="fe fe-x"></i>
                                        </a>


                                        <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal"
                                                data-target="#modalProduct">
                                            <i class="fe fe-eye mr-2 mb-1"></i> {{__('Quick View')}}
                                        </button>


                                        <img class="card-img-top" src="{{$product->sample_image}}" alt="...">

                                    </div>


                                    <div class="card-body font-weight-bold text-center">
                                        <a class="text-body" href="/{{$product->url_key}}">{{$product->name}}</a> <br>
                                        <span class="text-muted">${{amount($product->price)}}</span>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
