@extends('front.layouts.default')
@section('title','Category | ')
@section('content')
    <div class="py-3 bg-dark bg-pattern @@classList">
        <div class="container">
            <div class="row">
                <div class="col-12">
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

                    <form class="mb-10 mb-md-0">
                        <ul class="nav nav-vertical" id="filterNav">
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                                   data-toggle="collapse" href="#categoryCollapse">
                                    Category
                                </a>

                                <!-- Collapse -->
                                <div class="collapse show" id="categoryCollapse">
                                    <div class="form-group">
                                        <ul class="list-styled mb-0" id="productsNav">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="{{route('category')}}">
                                                    All Category
                                                </a>
                                            </li>
                                            @if($category->id!=1)
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="javascript:">
                                                        <strong>{{$category->name}}</strong> <span class="fas fa-angle-down"></span>
                                                    </a>
                                                </li>
                                            @endif
                                            @foreach($category->childCategories as $parentIndex => $child_category)
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link"
                                                       href="{{ route('category', ['category' => $child_category->url_key]) }}">
                                                        {{$child_category->name}}
                                                        ({{$child_category->products->count()}})
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                                   data-toggle="collapse" href="#seasonCollapse">
                                    Season
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="seasonCollapse" data-toggle="simplebar"
                                     data-target="#seasonGroup">
                                    <div class="form-group form-group-overflow mb-6" id="seasonGroup">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="seasonOne" type="checkbox"
                                                   checked="">
                                            <label class="custom-control-label" for="seasonOne">
                                                Summer
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="seasonTwo" type="checkbox">
                                            <label class="custom-control-label" for="seasonTwo">
                                                Winter
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="seasonThree" type="checkbox">
                                            <label class="custom-control-label" for="seasonThree">
                                                Spring &amp; Autumn
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                                   data-toggle="collapse" href="#sizeCollapse">
                                    Size
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="sizeCollapse" data-toggle="simplebar"
                                     data-target="#sizeGroup">
                                    <div class="form-group form-group-overlow mb-6" id="sizeGroup">
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeOne" type="checkbox">
                                            <label class="custom-control-label" for="sizeOne">
                                                3XS
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeTwo" type="checkbox"
                                                   disabled="">
                                            <label class="custom-control-label" for="sizeTwo">
                                                2XS
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeThree" type="checkbox">
                                            <label class="custom-control-label" for="sizeThree">
                                                XS
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeFour" type="checkbox">
                                            <label class="custom-control-label" for="sizeFour">
                                                S
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeFive" type="checkbox"
                                                   checked="">
                                            <label class="custom-control-label" for="sizeFive">
                                                M
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeSix" type="checkbox">
                                            <label class="custom-control-label" for="sizeSix">
                                                L
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeSeven" type="checkbox">
                                            <label class="custom-control-label" for="sizeSeven">
                                                XL
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeEight" type="checkbox"
                                                   disabled="">
                                            <label class="custom-control-label" for="sizeEight">
                                                2XL
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeNine" type="checkbox">
                                            <label class="custom-control-label" for="sizeNine">
                                                3XL
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeTen" type="checkbox">
                                            <label class="custom-control-label" for="sizeTen">
                                                4XL
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                                            <input class="custom-control-input" id="sizeEleven" type="checkbox">
                                            <label class="custom-control-label" for="sizeEleven">
                                                One Size
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                                   data-toggle="collapse" href="#colorCollapse">
                                    Color
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="colorCollapse" data-toggle="simplebar"
                                     data-target="#colorGroup">
                                    <div class="form-group form-group-overflow mb-6" id="colorGroup">
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorOne" type="checkbox">
                                            <label class="custom-control-label text-dark" for="colorOne">
                                                <span class="text-body">Black</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorTwo" type="checkbox"
                                                   checked="">
                                            <label class="custom-control-label" style="color: #f9f9f9;" for="colorTwo">
                                                <span class="text-body">White</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorThree" type="checkbox">
                                            <label class="custom-control-label text-info" for="colorThree">
                                                <span class="text-body">Blue</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorFour" type="checkbox">
                                            <label class="custom-control-label text-primary" for="colorFour">
                                                <span class="text-body">Red</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorFive" type="checkbox"
                                                   disabled="">
                                            <label class="custom-control-label" for="colorFive" style="color: #795548">
                                                <span class="text-body">Brown</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorSix" type="checkbox">
                                            <label class="custom-control-label text-gray-300" for="colorSix">
                                                <span class="text-body">Gray</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color mb-3">
                                            <input class="custom-control-input" id="colorSeven" type="checkbox">
                                            <label class="custom-control-label" for="colorSeven"
                                                   style="color: #17a2b8;">
                                                <span class="text-body">Cyan</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-color">
                                            <input class="custom-control-input" id="colorEight" type="checkbox">
                                            <label class="custom-control-label" for="colorEight"
                                                   style="color: #e83e8c;">
                                                <span class="text-body">Pink</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                                   data-toggle="collapse" href="#brandCollapse">
                                    Brand
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="brandCollapse" data-toggle="simplebar"
                                     data-target="#brandGroup">

                                    <!-- Search -->
                                    <div data-toggle="lists"
                                         data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">

                                        <!-- Input group -->
                                        <div class="input-group input-group-merge mb-6">
                                            <input class="form-control form-control-xs search" type="search"
                                                   placeholder="Search Brand">

                                            <!-- Button -->
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-border btn-xs">
                                                    <i class="fe fe-search"></i>
                                                </button>
                                            </div>

                                        </div>

                                        <!-- Form group -->
                                        <div class="form-group form-group-overflow mb-6" id="brandGroup">
                                            <div class="list">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandOne" type="checkbox">
                                                    <label class="custom-control-label name" for="brandOne">
                                                        Dsquared2
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandTwo" type="checkbox"
                                                           disabled="">
                                                    <label class="custom-control-label name" for="brandTwo">
                                                        Alexander McQueen
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandThree" type="checkbox">
                                                    <label class="custom-control-label name" for="brandThree">
                                                        Balenciaga
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandFour" type="checkbox"
                                                           checked="">
                                                    <label class="custom-control-label name" for="brandFour">
                                                        Adidas
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandFive" type="checkbox">
                                                    <label class="custom-control-label name" for="brandFive">
                                                        Balmain
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandSix" type="checkbox">
                                                    <label class="custom-control-label name" for="brandSix">
                                                        Burberry
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandSeven" type="checkbox">
                                                    <label class="custom-control-label name" for="brandSeven">
                                                        Chloé
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input class="custom-control-input" id="brandEight" type="checkbox">
                                                    <label class="custom-control-label name" for="brandEight">
                                                        Kenzo
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="brandNine" type="checkbox">
                                                    <label class="custom-control-label name" for="brandNine">
                                                        Givenchy
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6"
                                   data-toggle="collapse" href="#priceCollapse">
                                    Price
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="priceCollapse" data-toggle="simplebar"
                                     data-target="#priceGroup">

                                    <!-- Form group-->
                                    <div class="form-group form-group-overflow mb-6" id="priceGroup">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="priceOne" type="checkbox"
                                                   checked="">
                                            <label class="custom-control-label" for="priceOne">
                                                $10.00 - $49.00
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="priceTwo" type="checkbox"
                                                   checked="">
                                            <label class="custom-control-label" for="priceTwo">
                                                $50.00 - $99.00
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="priceThree" type="checkbox">
                                            <label class="custom-control-label" for="priceThree">
                                                $100.00 - $199.00
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="priceFour" type="checkbox">
                                            <label class="custom-control-label" for="priceFour">
                                                $200.00 and Up
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Range -->
                                    <div class="d-flex align-items-center">

                                        <!-- Input -->
                                        <input type="number" class="form-control form-control-xs" placeholder="$10.00"
                                               min="10">

                                        <!-- Divider -->
                                        <div class="text-gray-350 mx-2">‒</div>

                                        <!-- Input -->
                                        <input type="number" class="form-control form-control-xs" placeholder="$350.00"
                                               max="350">

                                    </div>

                                </div>

                            </li>
                        </ul>
                    </form>

                </div>
                <div class="col-12 col-md-8 col-lg-9">

                    <!-- Slider -->
                    <div class="flickity-page-dots-inner mb-9" data-flickity='{"pageDots": true}' hidden>

                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-h-100 bg-left"
                                 style="background-image: url(frontend/assets/img/covers/cover-24.jpg);">
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
                                    <div class="col-12 col-md-2 col-lg-4 col-xl-6 d-none d-md-block bg-cover"
                                         style="background-image: url(frontend/assets/img/covers/cover-16.jpg);"></div>
                                </div>
                            </div>
                        </div>


                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-cover"
                                 style="background-image: url(frontend/assets/img/covers/cover-29.jpg)">
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
                            <div class="card bg-cover"
                                 style="background-image: url(frontend/assets/img/covers/cover-30.jpg);">
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
                            <h3 class="mb-1">{{$category->id==1?'All Products':$category->name}}</h3>

                            <!-- Breadcrumb -->
                            <ol class="breadcrumb mb-md-0 font-size-xs text-gray-400">
                                <li class="breadcrumb-item">
                                    <a class="text-gray-400" href="{{route('welcome')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{$category->id==1?'All Products':$category->name}}
                                </li>
                            </ol>

                        </div>
                        <div class="col-12 col-md-auto">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sort By: Name</a>
                            <div class="dropdown-menu minw-0">
                                <a class="dropdown-item" href="{{route('category',['category'=> request()->category, 'sort' => 'id_desc'])}}">{{__('Latest Items')}}</a>
                                <a class="dropdown-item" href="{{route('category',['category'=> request()->category, 'sort' => 'price_asc'])}}">{{__('Price ascending')}}</a>
                                <a class="dropdown-item" href="{{route('category',['category'=> request()->category, 'sort' => 'price_desc'])}}">{{__('Price descending')}}</a>
                            </div>

                        </div>

                        @if(session()->has('success'))
                            <div class="col-12">
                                <div class="flash-alert mt-2">
                                    <strong>Success</strong> {{session('success')}}
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Tags -->
                    <div class="row mb-7">
                        <div class="col-12">

                            @if($category->id!=1)
                                <span class="btn btn-xs btn-light font-weight-normal text-muted mr-3 mb-3">
                                    {{$category->name}} <a class="text-reset ml-2" href="{{route('category')}}" role="button">
                                        <i class="fe fe-x"></i>
                                    </a>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="row">
                        @if(!count($products))
                            <div class="col-12">
                                <div class="alert alert-warning">No products</div>
                            </div>
                        @endif
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
                                        <a href="/{{$product->url_key}}">

                                            <img class="card-img-top card-img-front"
                                                 src="{{$product->sample_image}}" alt="...">
                                        </a>

                                        <!-- Actions -->
                                        <div class="card-actions">
                                            {{--<span class="card-action">
                                              <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="modal"
                                                      data-target="#modalProduct">
                                                <i class="fe fe-eye"></i>
                                              </button>
                                            </span>--}}
                                            <span class="card-action">
                                                @if ($product->qty > 0)
                                                    <form action="{{ route('add.to.cart') }}"
                                                          method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="sku" value="{{$product->sku}}">
                                                        <button class="btn btn-xs btn-circle btn-white-primary"
                                                                data-toggle="button">
                                                            <i class="fe fe-shopping-cart"></i>
                                                        </button>
                                                    </form>
                                                @endif

                                            </span>
                                            <span class="card-action">
                                                <a href="{{route('add.to.wishlist',$product->sku)}}"
                                                   class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                    <i class="fe fe-heart"></i>
                                                </a>
                                            </span>
                                        </div>

                                    </div>

                                    <!-- Body -->
                                    <div class="card-body px-0">

                                        <!-- Category -->
                                        <div class="font-size-xs">
                                            <a class="text-muted"
                                               href="/{{$product->categories[0]->url_key}}">{{$product->categories[0]->name}}</a>
                                        </div>

                                        <!-- Title -->
                                        <div class="font-weight-bold">
                                            <a class="text-body" href="/{{$product->url_key}}">
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

                    <!-- Pagination -->

                    <nav class="d-flex justify-content-center justify-content-md-end">
                        {!! $products->appends(request()->input())->links() !!}
                    </nav>

                </div>
            </div>
        </div>
    </section>

@endsection
