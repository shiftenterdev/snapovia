@extends('front.layouts.default')
@section('title','Shopping never been that easy | ')
@section('content')
    <!-- PROMO -->
    <div class="py-3 bg-dark bg-pattern mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Text -->
                    <div class="text-center text-white">
              <span class="heading-xxs letter-spacing-xl">
                ⚡️ {{__('Happy Holiday Deals on Everything')}} ⚡️
              </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORIES -->
    <section>
        <div class="row no-gutters d-block d-lg-flex flickity flickity-lg-none" data-flickity='{"watchCSS": true}'>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column bg-cover"
                 style="background-image: url({{asset('frontend/assets/img/covers/cover-1.jpg')}});">
                <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
                    <div class="card-body mt-auto mb-n11 py-8">

                        <!-- Heading -->
                        <h1 class="mb-0 font-weight-bolder">
                            {{__('Women')}}
                        </h1>

                    </div>
                    <div class="card-body mt-auto py-8">

                        <!-- Button -->
                        <a class="btn btn-white stretched-link" href="shop.html">
                            Shop Women <i class="fe fe-arrow-right ml-2"></i>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column bg-cover"
                 style="background-image: url({{asset('frontend/assets/img/covers/cover-2.jpg')}});">
                <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
                    <div class="card-body mt-auto mb-n11 py-8">

                        <!-- Heading -->
                        <h1 class="mb-0 font-weight-bolder">
                            {{__('Men')}}
                        </h1>

                    </div>
                    <div class="card-body mt-auto py-8">

                        <!-- Button -->
                        <a class="btn btn-white stretched-link" href="shop.html">
                            Shop Men <i class="fe fe-arrow-right ml-2"></i>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column bg-cover"
                 style="background-image: url({{asset('frontend/assets/img/covers/cover-3.jpg')}});">
                <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
                    <div class="card-body mt-auto mb-n11 py-8">

                        <!-- Heading -->
                        <h1 class="mb-0 font-weight-bolder">
                            {{__('Kids')}}
                        </h1>

                    </div>
                    <div class="card-body mt-auto py-8">

                        <!-- Button -->
                        <a class="btn btn-white stretched-link" href="shop.html">
                            Shop Kids <i class="fe fe-arrow-right ml-2"></i>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FEATURES -->
    <section class="pt-7">
        <div class="container">
            <div class="row pb-7 border-bottom">
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

    <!-- BEST PICKS -->
    <section class="pt-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                    <!-- Preheading -->
                    <h6 class="heading-xxs mb-3 text-gray-400">
                        {{__('New Collection')}}
                    </h6>

                    <!-- Heading -->
                    <h2 class="mb-4">{{__('Best Picks 2020')}}</h2>

                    <!-- Subheading -->
                    <p class="mb-10 text-gray-500">
                        Appear, dry there darkness they're seas, dry waters thing fly midst. Beast, above fly brought
                        Very
                        green.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4 d-flex flex-column">

                    <!-- Card -->
                    <div class="card mb-7 text-white"
                         style="min-height: 400px; background-image: url(frontend/assets/img/products/product-1.jpg)">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                 style="background-image: url(frontend/assets/img/products/product-1.jpg);"></div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto text-center">

                            <!-- Heading -->
                            <h4 class="mb-0">{{__('Bags Collection')}}</h4>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link text-reset" href="shop.html">
                                {{__('Shop Now')}} <i class="fe fe-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-7 col-lg-8 d-flex flex-column">

                    <!-- Card -->
                    <div class="card mb-7 text-body" style="min-height: 400px;">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                 style="background-image: url(frontend/assets/img/products/product-2.jpg);"></div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto px-md-10 text-center text-md-left">

                            <!-- Circle -->
                            <div class="card-circle card-circle-lg card-circle-right">
                                <strong>save</strong>
                                <span class="font-size-h4 font-weight-bold">30%</span>
                            </div>

                            <!-- Heading -->
                            <h4 class="mb-0">Printed men’s Shirts</h4>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                {{__('Shop Now')}} <i class="fe fe-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-7 col-lg-8 d-flex flex-column">

                    <!-- Card -->
                    <div class="card mb-7 mb-md-0 text-body" style="min-height: 400px;">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                 style="background-image: url(frontend/assets/img/products/product-3.jpg);"></div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto px-md-10 text-center text-md-left">

                            <!-- Heading -->
                            <h4 class="mb-0">Basic women’s Dresses</h4>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                {{__('Shop Now')}} <i class="fe fe-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-5 col-lg-4 d-flex flex-column">

                    <!-- Card -->
                    <div class="card text-white" style="min-height: 400px;">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                 style="background-image: url(frontend/assets/img/products/product-4.jpg);"></div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto text-center">

                            <!-- Heading -->
                            <h4 class="mb-0">Sweatshirts</h4>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link text-reset" href="shop.html">
                                {{__('Shop Now')}} <i class="fe fe-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- TOP SELLERS -->
    <section class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">

                    <!-- Heading -->
                    <h2 class="mb-4 text-center">{{__('Top month Sellers')}}</h2>

                    <!-- Nav -->
                    <div class="nav justify-content-center mb-10">
                        <a class="nav-link active" href="#womenTab" data-toggle="tab">{{__('Women')}}</a>
                        <a class="nav-link" href="#menTab" data-toggle="tab">{{__('Men')}}</a>
                        <a class="nav-link" href="#gadgetTab" data-toggle="tab">{{__('Kids')}}</a>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="womenTab">
                    <div class="row">
                        @foreach($women as $product)
                            <div class="col-6 col-md-4 col-lg-3">

                                <!-- Card -->
                                <div class="card mb-7">

                                    <!-- Badge -->
                                    <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                        {{--                                    {{__('New')}}--}}
                                    </div>

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Image -->
                                        <a class="" href="/{{$product->url_key}}">
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
                                            <a class="text-body" href="{{$product->url_path}}">
                                                {{$product->name}}
                                            </a>
                                        </div>

                                        <!-- Price -->
                                        <div class="font-weight-bold text-muted">
                                            ${{$product->price}}
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade show" id="menTab">
                    <div class="row">
                        @foreach($men as $product)
                            <div class="col-6 col-md-4 col-lg-3">

                                <!-- Card -->
                                <div class="card mb-7">

                                    <!-- Badge -->
                                    <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                        {{--                                    {{__('New')}}--}}
                                    </div>

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Image -->
                                        <a class="" href="/{{$product->url_key}}">
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
                                            ${{$product->price}}
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade show" id="gadgetTab">
                    <div class="row">
                        @foreach($gadget as $product)
                            <div class="col-6 col-md-4 col-lg-3">

                                <!-- Card -->
                                <div class="card mb-7">

                                    <!-- Badge -->
                                    <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                                                            {{__('New')}}
                                    </div>

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Image -->
                                        <a class="" href="/{{$product->url_key}}">
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
                                            ${{$product->price}}
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Link  -->
                    <div class="mt-7 text-center">
                        <a class="link-underline" href="#!">{{__('Discover more')}}</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- COUNTDOWN -->
    <section class="py-13 bg-cover" style="background-image: url(frontend/assets/img/covers/cover-4.jpg)">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-8 col-lg-6">

                    <!-- Heading -->
                    <h3 class="mb-7">
                        {{__('Get -50% from')}} <br/>{{__('Summer Collection')}}
                    </h3>

                    <!-- Counter -->
                    <div class="d-flex mb-9" data-countdown data-date="Jan 5, 2021 15:37:25">
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-days>00</div>
                            <div class="heading-xxs text-muted">{{__('Days')}}</div>
                        </div>
                        <div class="px-1 px-md-4">
                            <div class="font-size-h2 font-weight-bolder text-primary">:</div>
                        </div>
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-hours>00</div>
                            <div class="heading-xxs text-muted">{{__('Hours')}}</div>
                        </div>
                        <div class="px-1 px-md-4">
                            <div class="font-size-h2 font-weight-bolder text-primary">:</div>
                        </div>
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-minutes>00</div>
                            <div class="heading-xxs text-muted">{{__('Minutes')}}</div>
                        </div>
                        <div class="px-1 px-md-4">
                            <div class="font-size-h2 font-weight-bolder text-primary">:</div>
                        </div>
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-seconds>00</div>
                            <div class="heading-xxs text-muted">{{__('Seconds')}}</div>
                        </div>
                    </div>

                    <!-- Button -->
                    <a class="btn btn-dark" href="shop.html">
                        {{__('Shop Now')}} <i class="fe fe-arrow-right ml-2"></i>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                    <!-- Preheading -->
                    <h6 class="heading-xxs mb-3 text-gray-400">
                        {{__('What buyers say')}}
                    </h6>

                    <!-- Heading -->
                    <h2 class="mb-10">{{__('Latest buyers Reviews')}}</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Slider -->
                    <div data-flickity='{"pageDots": true}'>
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">

                            <!-- Card -->
                            <div class="card-lg card border">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="row align-items-center mb-6">
                                        <div class="col-4">

                                            <!-- Image -->
                                            <img src="frontend/assets/img/products/product-13.jpg" alt="..."
                                                 class="img-fluid">

                                        </div>
                                        <div class="col-8 ml-n2">

                                            <!-- Preheading -->
                                            <a class="font-size-xs text-muted" href="shop.html">
                                                Shoes
                                            </a>

                                            <!-- Heading -->
                                            <a class="d-block font-weight-bold text-body" href="product.html">
                                                Low top Sneakers
                                            </a>

                                            <!-- Rating -->
                                            <div class="rating font-size-xxs text-warning" data-value="3">
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Blockquote -->
                                    <blockquote class="mb-0">
                                        <p class="text-muted">
                                            From creepeth said moved given divide make multiply of him shall itself also
                                            above second doesn't unto created saying land herb sea midst night wherein.
                                        </p>
                                        <footer class="font-size-xs text-muted">
                                            Logan Edwards,
                                            <time datetime="2019-06-01">01 Jun 2019</time>
                                        </footer>
                                    </blockquote>

                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">

                            <!-- Card -->
                            <div class="card-lg card border">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="row align-items-center mb-6">
                                        <div class="col-4">

                                            <!-- Image -->
                                            <img src="frontend/assets/img/products/product-14.jpg" alt="..."
                                                 class="img-fluid">

                                        </div>
                                        <div class="col-8 ml-n2">

                                            <!-- Preheading -->
                                            <a class="font-size-xs text-muted" href="shop.html">
                                                Dresses
                                            </a>

                                            <!-- Heading -->
                                            <a class="d-block font-weight-bold text-body" href="product.html">
                                                Cotton print Dress
                                            </a>

                                            <!-- Rating -->
                                            <div class="rating font-size-xxs text-warning" data-value="5">
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Blockquote -->
                                    <blockquote class="mb-0">
                                        <p class="text-muted">
                                            God every fill great replenish darkness unto. Very open. Likeness their that
                                            light. Given under image to. Subdue of shall cattle day fish form saw spirit
                                            and
                                            given stars, us you whales may, land, saw fill unto.
                                        </p>
                                        <footer class="font-size-xs text-muted">
                                            Jane Jefferson,
                                            <time datetime="2019-05-29">29 May 2019</time>
                                        </footer>
                                    </blockquote>

                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">

                            <!-- Card -->
                            <div class="card-lg card border">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="row align-items-center mb-6">
                                        <div class="col-4">

                                            <!-- Image -->
                                            <img src="frontend/assets/img/products/product-15.jpg" alt="..."
                                                 class="img-fluid">

                                        </div>
                                        <div class="col-8 ml-n2">

                                            <!-- Preheading -->
                                            <a class="font-size-xs text-muted" href="shop.html">
                                                T-shirts
                                            </a>

                                            <!-- Heading -->
                                            <a class="d-block font-weight-bold text-body" href="product.html">
                                                Oversized print T-shirt
                                            </a>

                                            <!-- Rating -->
                                            <div class="rating font-size-xxs text-warning" data-value="4">
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Blockquote -->
                                    <blockquote class="mb-0">
                                        <p class="text-muted">
                                            Fill his waters wherein signs likeness waters. Second light gathered appear
                                            sixth fourth, seasons behold creeping female.
                                        </p>
                                        <footer class="font-size-xs text-muted">
                                            Darrell Baker,
                                            <time datetime="2019-05-18">18 May 2019</time>
                                        </footer>
                                    </blockquote>

                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">

                            <!-- Card -->
                            <div class="card-lg card border">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="row align-items-center mb-6">
                                        <div class="col-4">

                                            <!-- Image -->
                                            <img src="frontend/assets/img/products/product-10.jpg" alt="..."
                                                 class="img-fluid">

                                        </div>
                                        <div class="col-8 ml-n2">

                                            <!-- Preheading -->
                                            <a class="font-size-xs text-muted" href="shop.html">
                                                Bags & Accessories
                                            </a>

                                            <!-- Heading -->
                                            <a class="d-block font-weight-bold text-body" href="product.html">
                                                Suede cross body Bag
                                            </a>

                                            <!-- Rating -->
                                            <div class="rating font-size-xxs text-warning" data-value="4">
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Blockquote -->
                                    <blockquote class="mb-0">
                                        <p class="text-muted">
                                            God every fill great replenish darkness unto. Very open. Likeness their that
                                            light. Given under image to. Subdue of shall cattle day fish form saw spirit
                                            and
                                            given stars.
                                        </p>
                                        <footer class="font-size-xs text-muted">
                                            Pavel Doe,
                                            <time datetime="2019-05-29">29 May 2019</time>
                                        </footer>
                                    </blockquote>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- BRANDS -->
    <section class="py-12 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Heading -->
                    <h2 class="mb-3">@myozeshop</h2>

                    <!-- Subheading -->
                    <p class="mb-10 font-size-lg text-gray-500">
                        {{__("Appear, dry there darkness they're seas, dry waters.")}}
                    </p>

                </div>
            </div>
            <div class="row mx-n1 mb-10">
                <div class="col-6 col-sm-4 col-md px-1">

                    <!-- Card -->
                    <div class="card mb-2">

                        <!-- Image -->
                        <img src="frontend/assets/img/products/product-16.jpg" alt="..." class="card-img">

                        <!-- Overlay -->
                        <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40"
                           href="https://instagram.com/myozeshop" target="_blank">
                            <p class="my-0 font-size-xxs text-center text-white">
                                <i class="fe fe-heart mr-2"></i> 248 <i class="fe fe-message-square mr-2 ml-3"></i> 7
                            </p>
                        </a>

                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md px-1">

                    <!-- Card -->
                    <div class="card mb-2">

                        <!-- Image -->
                        <img src="frontend/assets/img/products/product-17.jpg" alt="..." class="card-img">

                        <!-- Overlay -->
                        <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40"
                           href="https://instagram.com/myozeshop" target="_blank">
                            <p class="my-0 font-size-xxs text-center text-white">
                                <i class="fe fe-heart mr-2"></i> 248 <i class="fe fe-message-square mr-2 ml-3"></i> 7
                            </p>
                        </a>

                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md px-1">

                    <!-- Card -->
                    <div class="card mb-2">

                        <!-- Image -->
                        <img src="frontend/assets/img/products/product-18.jpg" alt="..." class="card-img">

                        <!-- Overlay -->
                        <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40"
                           href="https://instagram.com/myozeshop" target="_blank">
                            <p class="my-0 font-size-xxs text-center text-white">
                                <i class="fe fe-heart mr-2"></i> 248 <i class="fe fe-message-square mr-2 ml-3"></i> 7
                            </p>
                        </a>

                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md px-1">

                    <!-- Card -->
                    <div class="card mb-2">

                        <!-- Image -->
                        <img src="frontend/assets/img/products/product-19.jpg" alt="..." class="card-img">

                        <!-- Overlay -->
                        <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40"
                           href="https://instagram.com/myozeshop" target="_blank">
                            <p class="my-0 font-size-xxs text-center text-white">
                                <i class="fe fe-heart mr-2"></i> 248 <i class="fe fe-message-square mr-2 ml-3"></i> 7
                            </p>
                        </a>

                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md px-1">

                    <!-- Card -->
                    <div class="card">

                        <!-- Image -->
                        <img src="frontend/assets/img/products/product-20.jpg" alt="..." class="card-img">

                        <!-- Overlay -->
                        <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40"
                           href="https://instagram.com/myozeshop" target="_blank">
                            <p class="my-0 font-size-xxs text-center text-white">
                                <i class="fe fe-heart mr-2"></i> 248 <i class="fe fe-message-square mr-2 ml-3"></i> 7
                            </p>
                        </a>

                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md px-1">

                    <!-- Card -->
                    <div class="card">

                        <!-- Image -->
                        <img src="frontend/assets/img/products/product-21.jpg" alt="..." class="card-img">

                        <!-- Overlay -->
                        <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40"
                           href="https://instagram.com/myozeshop" target="_blank">
                            <p class="my-0 font-size-xxs text-center text-white">
                                <i class="fe fe-heart mr-2"></i> 248 <i class="fe fe-message-square mr-2 ml-3"></i> 7
                            </p>
                        </a>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/mango.svg" alt="..." class="img-fluid mb-7 mb-md-0">

                </div>
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/zara.svg" alt="..." class="img-fluid mb-7 mb-md-0">

                </div>
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/reebok.svg" alt="..." class="img-fluid mb-7 mb-md-0">

                </div>
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/asos.svg" alt="..." class="img-fluid mb-7 mb-md-0">

                </div>
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/stradivarius.svg" alt="..."
                         class="img-fluid mb-6 mb-sm-0">

                </div>
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/adidas.svg" alt="..." class="img-fluid mb-6 mb-sm-0">

                </div>
                <div class="col-4 col-sm-3 col-md text-center">

                    <!-- Brand -->
                    <img src="frontend/assets/img/brands/gray-350/bershka.svg" alt="..." class="img-fluid">

                </div>
            </div>
        </div>
    </section>
@endsection
