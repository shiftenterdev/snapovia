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
                            <router-link class="nav-link" :to="{name:'shipping'}">Shipping</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'faq'}">FAQ</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'contact'}">Contact</router-link>
                        </li>
                    </ul>

                    <!-- Nav -->
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link text-gray-350" href="javascript:" target="_blank">
                                <i class="fab fa-facebook-f"/>
                            </a>
                        </li>
                        <li class="nav-item ml-xl-n4">
                            <a class="nav-link text-gray-350" href="javascript:" target="_blank">
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
                <router-link class="navbar-brand" :to="{name:'welcome'}">
                    Snapovia.
                </router-link>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"/>
                </button>

                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <router-link class="nav-link" :to="{name:'welcome'}">Home</router-link>
                        </li>

                        <li class="nav-item dropdown">
                            <router-link class="nav-link" href="/women/tops-women">Women</router-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/men/tops-men/hoodies-and-sweatshirts-men">Men</a>
                        </li>
                        <li class="nav-item dropdown">
                            <router-link class="nav-link" :to="{name:'gear'}">Gear</router-link>
                        </li>

                        <li class="nav-item dropdown position-static">
                            <router-link class="nav-link" :to="{name:'category'}">Category</router-link>
                        </li>

                        <li class="nav-item dropdown">
                            <router-link class="nav-link" :to="{name:'discount'}">Discount</router-link>
                        </li>
                        <li class="nav-item dropdown">
                            <router-link class="nav-link" :to="{name:'blog'}">Blog</router-link>
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
                            <router-link class="nav-link" :to="{name:'customer.login'}">
                                <i class="fe fe-user"/>
                            </router-link>
                        </li>

                        <li class="nav-item ml-lg-n4">
                            <router-link class="nav-link" :to="{name:'wishlist'}">
                                <i class="fe fe-heart"/>
                            </router-link>
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
