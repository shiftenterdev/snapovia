@extends('front.layouts.default')
@section('title','Category | ')
@section('content')
    <div class="py-3 bg-dark bg-pattern @@classList">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Text -->
                    <div class="text-center text-white">
              <span class="heading-xxs letter-spacing-xl">
                ⚡️ Happy Holiday Deals on Everything ⚡️
              </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="py-11">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">

                    @include('front.catalog.category.filter',['categories'=>$categories])

                </div>
                <div class="col-12 col-md-8 col-lg-9">

                    <!-- Slider -->
                    <div class="flickity-page-dots-inner mb-9" data-flickity='{"pageDots": true}'>

                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-h-100 bg-left" style="background-image: url(frontend/assets/img/covers/cover-24.jpg);">
                                <div class="row" style="min-height: 400px;">
                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 align-self-center">
                                        <div class="card-body px-md-10 py-11">

                                            <!-- Heading -->
                                            <h4>
                                                2019 Summer Collection
                                            </h4>

                                            <!-- Button -->
                                            <a class="btn btn-link px-0 text-body" href="shop.html">
                                                View Collection <i class="fe fe-arrow-right ml-2"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 col-lg-4 col-xl-6 d-none d-md-block bg-cover" style="background-image: url(frontend/assets/img/covers/cover-16.jpg);"></div>
                                </div>
                            </div>
                        </div>


                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-cover" style="background-image: url(frontend/assets/img/covers/cover-29.jpg)">
                                <div class="row align-items-center" style="min-height: 400px;">
                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                                        <div class="card-body px-md-10 py-11">

                                            <!-- Heading -->
                                            <h4 class="mb-5">Get -50% from Summer Collection</h4>

                                            <!-- Text -->
                                            <p class="mb-7">
                                                Appear, dry there darkness they're seas. <br>
                                                <strong class="text-primary">Use code 4GF5SD</strong>
                                            </p>

                                            <!-- Button -->
                                            <a class="btn btn-outline-dark" href="shop.html">
                                                Shop Now <i class="fe fe-arrow-right ml-2"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-cover" style="background-image: url(frontend/assets/img/covers/cover-30.jpg);">
                                <div class="row align-items-center" style="min-height: 400px;">
                                    <div class="col-12">
                                        <div class="card-body px-md-10 py-11 text-center text-white">

                                            <!-- Preheading -->
                                            <p class="text-uppercase">Enjoy an extra</p>

                                            <!-- Heading -->
                                            <h1 class="display-4 text-uppercase">50% off</h1>

                                            <!-- Link -->
                                            <a class="link-underline text-reset" href="shop.html">Shop Collection</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Header -->
                    <div class="row align-items-center mb-7">
                        <div class="col-12 col-md">

                            <!-- Heading -->
                            <h3 class="mb-1">Womens' Clothing</h3>

                            <!-- Breadcrumb -->
                            <ol class="breadcrumb mb-md-0 font-size-xs text-gray-400">
                                <li class="breadcrumb-item">
                                    <a class="text-gray-400" href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Women's Clothing
                                </li>
                            </ol>

                        </div>
                        <div class="col-12 col-md-auto">

                            <!-- Select -->
                            <select class="custom-select custom-select-xs">
                                <option selected="">Most popular</option>
                            </select>

                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="row mb-7">
                        <div class="col-12">

                <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Shift dresses <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Summer <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  M <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  White <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Red <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  Adidas <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  $10.00 - $49.00 <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>
                            <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                  $50.00 - $99.00 <a class="text-reset ml-2" href="#!" role="button">
                    <i class="fe fe-x"></i>
                  </a>
                </span>

                        </div>
                    </div>

                    <!-- Products -->
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-6 col-md-4">

                                <!-- Card -->
                                <div class="card mb-7">

                                    <!-- Badge -->
                                    <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                        New
                                    </div>

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Image -->
                                        <a href="{{$product->url_key}}">

                                            <img class="card-img-top card-img-front"
                                                 src="{{$product->sample_image}}" alt="...">
                                        </a>

                                        <!-- Actions -->
                                        <div class="card-actions">
                          <span class="card-action">
                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="modal"
                                    data-target="#modalProduct">
                              <i class="fe fe-eye"></i>
                            </button>
                          </span>
                                            <span class="card-action">
                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-shopping-cart"></i>
                            </button>
                          </span>
                                            <span class="card-action">
                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                              <i class="fe fe-heart"></i>
                            </button>
                          </span>
                                        </div>

                                    </div>

                                    <!-- Body -->
                                    <div class="card-body px-0">

                                        <!-- Category -->
                                        <div class="font-size-xs">
                                            <a class="text-muted" href="shop.html">Shoes</a>
                                        </div>

                                        <!-- Title -->
                                        <div class="font-weight-bold">
                                            <a class="text-body" href="{{$product->url_key}}">
                                                {{$product->name}}
                                            </a>
                                        </div>

                                        <!-- Price -->
                                        <div class="font-weight-bold text-muted">
                                            {{$product->price}}
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->

                    <nav class="d-flex justify-content-center justify-content-md-end">
                        {!! $products->links() !!}
                    </nav>

                </div>
            </div>
        </div>
    </section>

@endsection
