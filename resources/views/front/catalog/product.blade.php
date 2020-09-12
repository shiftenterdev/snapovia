@extends('front.layouts.default')
@section('title',$product->name.' | ')
@section('content')
    <nav class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb mb-0 font-size-xs text-gray-400">
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="{{route('welcome')}}">{{__('Home')}}</a>
                        </li>
                        @foreach($product->categories as $cat)
                            <li class="breadcrumb-item">
                                <a class="text-gray-400" href="{{$cat->url_key}}">{{$cat->name}}</a>
                            </li>
                        @endforeach
                        <li class="breadcrumb-item active">
                            {{$product->name}}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <!-- PRODUCT -->
    <livewire:front.catalog.product :product="$product"/>

    <!-- DESCRIPTION -->
    <section class="pt-11">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Nav -->
                    <div
                            class="nav nav-tabs nav-overflow justify-content-start justify-content-md-center border-bottom">
                        <a class="nav-link active" data-toggle="tab" href="#descriptionTab">
                            {{__('Description')}}
                        </a>
                        <a class="nav-link" data-toggle="tab" href="#sizeTab">
                            {{__('Size & Fit')}}
                        </a>
                        <a class="nav-link" data-toggle="tab" href="#shippingTab">
                            {{__('Shipping & Return')}}
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="descriptionTab">
                            <div class="row justify-content-center py-9">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="text-gray-500">
                                                {!! $product->description !!}
                                            </div>

                                            <!-- Text -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sizeTab">
                            <div class="row justify-content-center py-9">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="row">
                                        <div class="col-12 col-md-6">

                                            <!-- Text -->
                                            <p class="mb-4">
                                                <strong>{{__('Fitting information')}}:</strong>
                                            </p>

                                            <!-- List -->
                                            <ul class="mb-md-0 text-gray-500">
                                                <li>
                                                    Upon seas hath every years have whose
                                                    subdue creeping they're it were.
                                                </li>
                                                <li>
                                                    Make great day bearing.
                                                </li>
                                                <li>
                                                    For the moveth is days don't said days.
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-12 col-md-6">

                                            <!-- Text -->
                                            <p class="mb-4">
                                                <strong>Model measurements:</strong>
                                            </p>

                                            <!-- List -->
                                            <ul class="list-unstyled text-gray-500">
                                                <li>Height: 1.80 m</li>
                                                <li>Bust/Chest: 89 cm</li>
                                                <li>Hips: 91 cm</li>
                                                <li>Waist: 65 cm</li>
                                                <li>Model size: M</li>
                                            </ul>

                                            <!-- Size -->
                                            <p class="mb-0">
                                                <img src="frontend/assets/img/icons/icon-ruler.svg" alt="..."
                                                     class="img-fluid">
                                                <a class="text-reset text-decoration-underline ml-3" data-toggle="modal"
                                                   href="#modalSizeChart">Size chart</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="shippingTab">
                            <div class="row justify-content-center py-9">
                                <div class="col-12 col-lg-10 col-xl-8">

                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm table-hover">
                                            <thead>
                                            <tr>
                                                <th>Shipping Options</th>
                                                <th>Delivery Time</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Standard Shipping</td>
                                                <td>Delivery in 5 - 7 working days</td>
                                                <td>$8.00</td>
                                            </tr>
                                            <tr>
                                                <td>Express Shipping</td>
                                                <td>Delivery in 3 - 5 working days</td>
                                                <td>$12.00</td>
                                            </tr>
                                            <tr>
                                                <td>1 - 2 day Shipping</td>
                                                <td>Delivery in 1 - 2 working days</td>
                                                <td>$12.00</td>
                                            </tr>
                                            <tr>
                                                <td>Free Shipping</td>
                                                <td>
                                                    Living won't the He one every subdue meat replenish
                                                    face was you morning firmament darkness.
                                                </td>
                                                <td>$0.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Caption -->
                                    <p class="mb-0 text-gray-500">
                                        May, life blessed night so creature likeness their, for. <a
                                                class="text-body text-decoration-underline" href="#!">Find out more</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section class="pt-11">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h4 class="mb-10 text-center">{{__('You might also like')}}</h4>

                    <!-- Items -->
                    <div class="row">
                        @foreach($popular_products as $key => $product)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 {{$key==3?'d-md-none d-lg-block':""}}">

                                <!-- Card -->
                                <div class="card mb-7">

                                    <!-- Badge -->
                                    <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                        New
                                    </div>

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Image -->
                                        <a class="" href="{{$product->url_key}}">
                                            <img class="card-img-top card-img-front"
                                                 src="{{$product->sample_image}}" alt="{{$product->name}}">
                                        </a>

                                        <!-- Actions -->
                                        <div class="card-actions">
                                            <span class="card-action">
                                                <button class="btn btn-xs btn-circle btn-white-primary"
                                                        data-toggle="modal" data-target="#modalProduct">
                                                    <i class="fe fe-eye"></i>
                                                </button>
                                            </span>
                                            <span class="card-action">
                                                <button class="btn btn-xs btn-circle btn-white-primary"
                                                        data-toggle="button">
                                                    <i class="fe fe-shopping-cart"></i>
                                                </button>
                                            </span>
                                            <span class="card-action">
                                                <button class="btn btn-xs btn-circle btn-white-primary"
                                                        data-toggle="button">
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
                                            ${{amount($product->price)}}
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="pt-9 pb-11" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h4 class="mb-10 text-center">{{__('Customer Reviews')}}</h4>

                    <!-- Header -->
                    <div class="row align-items-center">
                        <div class="col-12 col-md-auto">

                            <!-- Dropdown -->
                            <div class="dropdown mb-4 mb-md-0">

                                <!-- Toggle -->
                                <a class="dropdown-toggle text-reset" data-toggle="dropdown" href="#">
                                    <strong>{{__('Sort by')}}: Newest</strong>
                                </a>

                                <!-- Menu -->
                                <div class="dropdown-menu mt-3">
                                    <a class="dropdown-item" href="#!">Newest</a>
                                    <a class="dropdown-item" href="#!">Oldest</a>
                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-md text-md-center">

                            <!-- Rating -->
                            <div class="rating text-dark h6 mb-4 mb-md-0" data-value="4">
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

                            <!-- Count -->
                            <strong class="font-size-sm ml-2">{{__('Reviews')}} (3)</strong>

                        </div>
                        <div class="col-12 col-md-auto">

                            <!-- Button -->
                            <a class="btn btn-sm btn-dark" data-toggle="collapse" href="#reviewForm">
                                {{__('Write Review')}}
                            </a>

                        </div>
                    </div>

                    <!-- New Review -->
                    <div class="collapse" id="reviewForm">

                        <!-- Divider -->
                        <hr class="my-8">

                        <!-- Form -->
                        <form>
                            <div class="row">
                                <div class="col-12 mb-6 text-center">

                                    <!-- Text -->
                                    <p class="mb-1 font-size-xs">
                                        {{__('Score')}}:
                                    </p>

                                    <!-- Rating form -->
                                    <div class="rating-form">

                                        <!-- Input -->
                                        <input class="rating-input" type="range" min="1" max="5" value="5">

                                        <!-- Rating -->
                                        <div class="rating h5 text-dark" data-value="5">
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
                                <div class="col-12 col-md-6">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="sr-only" for="reviewName">Your Name:</label>
                                        <input class="form-control form-control-sm" id="reviewName" type="text"
                                               placeholder="Your Name *" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="sr-only" for="reviewEmail">Your Email:</label>
                                        <input class="form-control form-control-sm" id="reviewEmail" type="email"
                                               placeholder="Your Email *" required>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="sr-only" for="reviewTitle">Review Title:</label>
                                        <input class="form-control form-control-sm" id="reviewTitle" type="text"
                                               placeholder="Review Title *" required>
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="sr-only" for="reviewText">Review:</label>
                                        <textarea class="form-control form-control-sm" id="reviewText" rows="5"
                                                  placeholder="Review *" required></textarea>
                                    </div>

                                </div>
                                <div class="col-12 text-center">

                                    <!-- Button -->
                                    <button class="btn btn-outline-dark" type="submit">
                                        {{__('Post Review')}}
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- Reviews -->
                    <div class="mt-8">

                        <!-- Review -->
                        <div class="review">
                            <div class="review-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxl mb-6 mb-md-0">
                                            <span class="avatar-title rounded-circle">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md">

                                        <!-- Header -->
                                        <div class="row mb-6">
                                            <div class="col-12">

                                                <!-- Rating -->
                                                <div class="rating font-size-sm text-dark" data-value="5">
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
                                            <div class="col-12">

                                                <!-- Time -->
                                                <span class="font-size-xs text-muted">
                                                    Logan Edwards,
                                                    <time datetime="2019-07-25">25 Jul 2019</time>
                                                </span>

                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <p class="mb-2 font-size-lg font-weight-bold">
                                            So cute!
                                        </p>

                                        <!-- Text -->
                                        <p class="text-gray-500">
                                            Justo ut diam erat hendrerit. Morbi porttitor, per eu. Sodales curabitur
                                            diam sociis. Taciti lobortis nascetur. Ante laoreet odio hendrerit.
                                            Dictumst curabitur nascetur lectus potenti dis sollicitudin habitant quis
                                            vestibulum.
                                        </p>

                                        <!-- Footer -->
                                        <div class="row align-items-center">
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 font-size-sm">Was this review helpful?</p>

                                            </div>
                                            <div class="col-auto mr-auto">

                                                <!-- Rate -->
                                                <div class="rate">
                                                    <a class="rate-item" data-toggle="vote" data-count="3" href="#"
                                                       role="button">
                                                        <i class="fe fe-thumbs-up"></i>
                                                    </a>
                                                    <a class="rate-item" data-toggle="vote" data-count="0" href="#"
                                                       role="button">
                                                        <i class="fe fe-thumbs-down"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 font-size-sm">Comments (0)</p>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Button -->
                                                <a class="btn btn-xs btn-outline-border" href="#!">
                                                    Comment
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class="review">

                            <!-- Body -->
                            <div class="review-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxl mb-6 mb-md-0">
                                            <span class="avatar-title rounded-circle">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md">

                                        <!-- Header -->
                                        <div class="row mb-6">
                                            <div class="col-12">

                                                <!-- Rating -->
                                                <div class="rating font-size-sm text-dark" data-value="3">
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
                                            <div class="col-12">

                                                <!-- Time -->
                                                <span class="font-size-xs text-muted">
                                                    Sophie Casey,
                                                    <time datetime="2019-07-07">07 Jul 2019</time>
                                                </span>

                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <p class="mb-2 font-size-lg font-weight-bold">
                                            Cute, but too small
                                        </p>

                                        <!-- Text -->
                                        <p class="text-gray-500">
                                            Shall good midst can't. Have fill own his multiply the divided. Thing great.
                                            Of heaven whose signs.
                                        </p>

                                        <!-- Footer -->
                                        <div class="row align-items-center">
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 font-size-sm">Was this review helpful?</p>

                                            </div>
                                            <div class="col-auto mr-auto">

                                                <!-- Rate -->
                                                <div class="rate">
                                                    <a class="rate-item" data-toggle="vote" data-count="2" href="#"
                                                       role="button">
                                                        <i class="fe fe-thumbs-up"></i>
                                                    </a>
                                                    <a class="rate-item" data-toggle="vote" data-count="1" href="#"
                                                       role="button">
                                                        <i class="fe fe-thumbs-down"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col-auto d-none d-lg-block">

                                                <!-- Text -->
                                                <p class="mb-0 font-size-sm">Comments (1)</p>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Button -->
                                                <a class="btn btn-xs btn-outline-border" href="#!">
                                                    Comment
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Child review -->
                            <div class="review review-child">
                                <div class="review-body">

                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-12 col-md-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                                                <span class="avatar-title rounded-circle">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md">

                                            <!-- Header -->
                                            <div class="row mb-6">
                                                <div class="col-12">

                                                    <!-- Rating -->
                                                    <div class="rating font-size-sm text-dark" data-value="4">
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
                                                <div class="col-12">

                                                    <!-- Time -->
                                                    <span class="font-size-xs text-muted">
                                                        William Stokes,
                                                        <time datetime="2019-07-14">14 Jul 2019</time>
                                                    </span>

                                                </div>
                                            </div>

                                            <!-- Title -->
                                            <p class="mb-2 font-size-lg font-weight-bold">
                                                Very good
                                            </p>

                                            <!-- Text -->
                                            <p class="text-gray-500">
                                                Made face lights yielding forth created for image behold blessed seas.
                                            </p>

                                            <!-- Footer -->
                                            <div class="row align-items-center">
                                                <div class="col-auto d-none d-lg-block">

                                                    <!-- Text -->
                                                    <p class="mb-0 font-size-sm">Was this review helpful?</p>

                                                </div>
                                                <div class="col-auto mr-auto">

                                                    <!-- Rate -->
                                                    <div class="rate">
                                                        <a class="rate-item" data-toggle="vote" data-count="7" href="#"
                                                           role="button">
                                                            <i class="fe fe-thumbs-up"></i>
                                                        </a>
                                                        <a class="rate-item" data-toggle="vote" data-count="0" href="#"
                                                           role="button">
                                                            <i class="fe fe-thumbs-down"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto d-none d-lg-block">

                                                    <!-- Text -->
                                                    <p class="mb-0 font-size-sm">Comments (0)</p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Button -->
                                                    <a class="btn btn-xs btn-outline-border" href="#!">
                                                        Comment
                                                    </a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mt-9">
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

    <!-- FEATURES -->
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

@section('script')
    <script>
        $(() => {
            var mySwiper = new Swiper('#productSlider', {
                // Optional parameters
                direction: 'vertical',
                loop: true
            })
        });

    </script>
@endsection
