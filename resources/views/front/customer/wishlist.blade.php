@extends('front.layouts.default')
@section('title','My Wishlist | ')
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
                            {{__('My Account')}}
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
                    <h3 class="mb-10">{{__('My Wishlist')}}</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">

                    <!-- Nav -->
                    @include('front.customer.partials.menu')

                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">

                    <!-- Products -->
                    <div class="row">

                        <!-- Item -->
                        @foreach(Customer::user()->wishlist as $product)
                        <div class="col-6 col-md-4">
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                        <i class="fe fe-x"></i>
                                    </button>

                                    <!-- Button -->
                                    <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal" data-target="#modalProduct">
                                        <i class="fe fe-eye mr-2 mb-1"></i> {{__('Quick View')}}
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top" src="{{$product->sample_image}}" alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body font-weight-bold text-center">
                                    <a class="text-body" href="product.html">{{$product->name}}</a> <br>
                                    <span class="text-muted">${{amount($product->price)}}</span>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>

                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center justify-content-md-end">
                        <ul class="pagination pagination-sm text-gray-400">
                            <li class="page-item">
                                <a class="page-link page-link-arrow" href="#">
                                    <i class="fa fa-caret-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link page-link-arrow" href="#">
                                    <i class="fa fa-caret-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
@endsection
