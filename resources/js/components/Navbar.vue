<template>
    <div>
        <div class="navbar navbar-topbar navbar-expand-xl navbar-light bg-light">
            <div class="container">
                <div class="mr-xl-8">
                    <i class="fe fe-truck mr-2"/> <span class="heading-xxxs">Free shipping countrywide</span>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topbarCollapse"
                        aria-controls="topbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"/>
                </button>

                <div id="topbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav nav-divided navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">English</a>

                            <div class="dropdown-menu minw-0">
                                <a class="dropdown-item" href="en">English</a>
                                <a class="dropdown-item" href="sv">Swedish</a>
                                <a class="dropdown-item" href="da">Danish</a>
                                <a class="dropdown-item" href="no">Norwegian</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Nav -->
                    <ul class="nav navbar-nav mr-8">
                        <li class="nav-item">
                            <a class="nav-link" href="/shipping-and-returns">Shipping</a>
                        </li>
                        <li class="nav-item" v-if="isLoggedIn">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>

                    <!-- Nav -->
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link text-gray-350" href="javascript:">
                                <i class="fab fa-facebook-f"/>
                            </a>
                        </li>
                        <li class="nav-item ml-xl-n4">
                            <a class="nav-link text-gray-350" href="javascript:">
                                <i class="fab fa-twitter"/>
                            </a>
                        </li>
                        <li class="nav-item ml-xl-n4">
                            <a class="nav-link text-gray-350" href="https://instagram.com/myozeshop">
                                <i class="fab fa-instagram"/>
                            </a>
                        </li>
                        <li class="nav-item ml-xl-n4">
                            <a class="nav-link text-gray-350" href="javascript:">
                                <i class="fab fa-medium"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Snapovia.
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"/>
                </button>

                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/women/tops-women">Women</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/men/tops-men/hoodies-and-sweatshirts-men">Men</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/gear">Gear</a>
                        </li>

                        <li class="nav-item dropdown position-static">
                            <!-- Toggle -->
                            <a class="nav-link" href="/category">Category</a>
                        </li>

                        <li class="nav-item dropdown">
                            <!-- Toggle -->
                            <a class="nav-link" href="/discount">Discount</a>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- Toggle -->
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                    </ul>

                    <!-- Nav -->
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" href="#modalSearch">
                                <i class="fe fe-search"/>
                            </a>
                        </li>
                        <li class="nav-item ml-lg-n4">
                            <a class="nav-link" href="/customer/login">
                                <i class="fe fe-user"/>
                            </a>
                        </li>

                        <li class="nav-item ml-lg-n4">
                            <a class="nav-link" href="customer.wishlist">
                                <i class="fe fe-heart"/>
                            </a>
                        </li>
                        <li class="nav-item ml-lg-n4">
                            <a class="nav-link" data-toggle="modal" href="#modalShoppingCart">
                                <span id="mini-cart-item-count" data-cart-items="0">
                                    <i class="fe fe-shopping-cart"/>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: 'Navbar',
        computed: {
            isLoggedIn: function () {
                return this.$store.getters.isLoggedIn
            }
        },
    }
</script>
