<div class="navbar navbar-topbar navbar-expand-xl navbar-light bg-light">
    <div class="container">
        <div class="mr-xl-8">
            <i class="fe fe-truck mr-2"></i> <span class="heading-xxxs">{{__('Free shipping countrywide')}}</span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topbarCollapse"
                aria-controls="topbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topbarCollapse">
            <ul class="nav nav-divided navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{current_language()}}</a>
                    <x-front.language />
                </li>
            </ul>

            <ul class="nav navbar-nav mr-8">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shipping-and-returns')}}">{{__('Shipping')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('faq')}}">{{__("FAQ")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">{{__("Contact")}}</a>
                </li>
            </ul>

            <ul class="nav navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link text-gray-350" href="javascript:">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item ml-xl-n4">
                    <a class="nav-link text-gray-350" href="javascript:">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item ml-xl-n4">
                    <a class="nav-link text-gray-350" href="https://instagram.com/myozeshop">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item ml-xl-n4">
                    <a class="nav-link text-gray-350" href="javascript:">
                        <i class="fab fa-medium"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{route('welcome')}}">
            Snapovia.
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('welcome')}}">{{__('Home')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/womens-clothing">{{__('Women')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/mans-fashion">{{__('Men')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/jewelry-watches">{{__('Jewelry & Watches')}}</a>
                </li>
                <li class="nav-item dropdown position-static">
                    <a class="nav-link" href="/category">{{__('Category')}}</a>
                    <div class="dropdown-menu w-100">
                        <form class="mb-2 mb-lg-0 border-bottom-lg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <nav class="nav nav-tabs nav-overflow font-size-xs border-bottom border-bottom-lg-0">
                                            <a class="nav-link text-uppercase active" data-toggle="tab" href="#navTab">
                                                Women
                                            </a>
                                            <a class="nav-link text-uppercase" data-toggle="tab" href="#navTab">
                                                Men
                                            </a>
                                            <a class="nav-link text-uppercase" data-toggle="tab" href="#navTab">
                                                Kids
                                            </a>
                                        </nav>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="navTab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 col-md">

                                                    <!-- Heading -->
                                                    <div class="mb-5 font-weight-bold">Clothing</div>

                                                    <!-- Links -->
                                                    <ul class="list-styled mb-6 mb-md-0 font-size-sm">
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">All
                                                                Clothing</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Blouses &
                                                                Shirts</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Coats &
                                                                Jackets</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Dresses</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Hoodies &
                                                                Sweats</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Denim</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Jeans</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Jumpers &
                                                                Cardigans</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Leggings</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-6 col-md">

                                                    <!-- Heading -->
                                                    <div class="mb-5 font-weight-bold">Shoes & Boots</div>

                                                    <!-- Links -->
                                                    <ul class="list-styled mb-6 mb-md-0 font-size-sm">
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">All Shoes &
                                                                Boots</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Branded
                                                                Shoes</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Boots</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Heels</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Trainers</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Sandals</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Shoes</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Wide Fit
                                                                Shoes</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-6 col-md">

                                                    <!-- Heading -->
                                                    <div class="mb-5 font-weight-bold">Bags & Accessories</div>

                                                    <!-- Links -->
                                                    <ul class="list-styled mb-0 font-size-sm">
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">All Bags &
                                                                Accessories</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link"
                                                               href="./shop.html">Accessories</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Bags &
                                                                Purses</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Luggage</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Belts</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Hats</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Hair
                                                                Accessories</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Jewellery</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Travel
                                                                Accessories</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-6 col-md">

                                                    <!-- Heading -->
                                                    <div class="mb-5 font-weight-bold">Collections</div>

                                                    <!-- Links -->
                                                    <ul class="list-styled mb-0 font-size-sm">
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">All
                                                                Collections</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link"
                                                               href="./shop.html">Occasionwear</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Going Out</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Workwear</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Holiday
                                                                Shop</a>
                                                        </li>
                                                        <li class="list-styled-item">
                                                            <a class="list-styled-link" href="./shop.html">Jean Fit
                                                                Guide</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-4 d-none d-lg-block">

                                                    <!-- Card -->
                                                    <div class="card">

                                                        <!-- Image -->
                                                        <img class="card-img"
                                                             src="{{asset('frontend/assets/img/products/product-110.jpg')}}" alt="...">

                                                        <!-- Overlay -->
                                                        <div
                                                                class="card-img-overlay bg-dark-0 bg-hover align-items-center">
                                                            <div class="text-center">
                                                                <a class="btn btn-white stretched-link"
                                                                   href="./shop.html">
                                                                    Shop Sweaters <i class="fe fe-arrow-right ml-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('discount')}}">{{__('Discount')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/blog">{{__('Blog')}}</a>
                </li>
            </ul>

            <!-- Nav -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" href="#modalSearch">
                        <i class="fe fe-search"></i>
                    </a>
                </li>
                @if(Customer::check())
                    <li class="nav-item ml-lg-n4">
                        <a class="nav-link" href="{{route('customer.info')}}">
                            <i class="fe fe-user"></i>
                        </a>
                    </li>
                @else
                    <li class="nav-item ml-lg-n4">
                        <a class="nav-link" href="{{route('customer.login')}}">
                            <i class="fe fe-user"></i>
                        </a>
                    </li>
                @endif
                <li class="nav-item ml-lg-n4">
                    <a class="nav-link" href="{{route('customer.wishlist')}}">
                        <i class="fe fe-heart"></i>
                    </a>
                </li>
                @php($is_show = request()->is('checkout*')?'javascript:':'#modalShoppingCart')
                <li class="nav-item ml-lg-n4">
                    <a class="nav-link" data-toggle="modal" href="{{$is_show}}">
                        <span id="mini-cart-item-count" data-cart-items="{{Cart::count()}}">
                            <i class="fe fe-shopping-cart"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
