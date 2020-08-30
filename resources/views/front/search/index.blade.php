@extends('front.layouts.default')
@section('title','Search product | ')
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

                    <!-- Header -->
                    <div class="row align-items-center mb-7">
                        <div class="col-12 col-md">

                            <!-- Heading -->
                            <h3 class="mb-1">Search keyword: <ins>{{request('search')}}</ins></h3>

                            <!-- Breadcrumb -->
                            <ol class="breadcrumb mb-md-0 font-size-xs text-gray-400">
                                <li class="breadcrumb-item">
                                    <a class="text-gray-400" href="{{route('welcome')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Search
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
