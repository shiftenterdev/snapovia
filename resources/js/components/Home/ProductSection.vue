<template>
    <section class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <!-- Heading -->
                    <h2 class="mb-4 text-center">
                        Top month Sellers
                    </h2>
                    <!-- Nav -->
                    <div class="nav justify-content-center mb-10">
                        <a class="nav-link active" href="#womenTab" data-toggle="tab">Women</a>
                        <a class="nav-link" href="#menTab" data-toggle="tab">Men</a>
                        <a class="nav-link" href="#gadgetTab" data-toggle="tab">Kids</a>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="womenTab" class="tab-pane fade show active">
                    <div class="row">
                        <div v-for="product in womensProduct" :key="product.sku" class="col-6 col-md-4 col-lg-3">
                            <!-- Card -->
                            <div class="card mb-7">
                                <!-- Badge -->
                                <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                    New
                                </div>

                                <!-- Image -->
                                <div class="card-img">
                                    <!-- Image -->
                                    <a class="" :href="product.url_key">
                                        <img class="card-img-top card-img-front"
                                             :src="product.sample_image" alt="..."
                                        >
                                    </a>

                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                    data-toggle="button"
                                            >
                                                <i class="fe fe-shopping-cart"/>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <a href=""
                                               class="btn btn-xs btn-circle btn-white-primary" data-toggle="button"
                                            >
                                                <i class="fe fe-heart"/>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <!-- Body -->
                                <div class="card-body px-0">
                                    <!-- Category -->
                                    <div class="font-size-xs">
                                        <a class="text-muted"
                                           :href="product.categories[0].url_key"
                                        >{{ product.categories[0].name }}</a>
                                    </div>

                                    <!-- Title -->
                                    <div class="font-weight-bold">
                                        <a class="text-body" :href="product.url_key">
                                            {{ product.name }}
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="font-weight-bold text-muted">
                                        ${{ productPrice(product.price) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menTab" class="tab-pane fade show">
                    <div class="row">
                        <div v-for="product in mensProduct" :key="product.sku" class="col-6 col-md-4 col-lg-3">
                            <div class="card mb-7">
                                <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                    New
                                </div>
                                <div class="card-img">
                                    <!-- Image -->
                                    <a class="" :href="product.url_key">
                                        <img class="card-img-top card-img-front"
                                             :src="product.sample_image" alt="..."
                                        >
                                    </a>
                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="modal"
                                                    data-target="#modalProduct"
                                            >
                                                <i class="fe fe-eye"/>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button
                                                    class="btn btn-xs btn-circle btn-white-primary"
                                                    data-toggle="button"
                                            >
                                                <i class="fe fe-shopping-cart"/>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <a href=""
                                               class="btn btn-xs btn-circle btn-white-primary" data-toggle="button"
                                            >
                                                <i class="fe fe-heart"/>
                                            </a>
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
                                        <a class="text-body" :href="product.url_key">
                                            {{ product.name }}
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="font-weight-bold text-muted">
                                        ${{ productPrice(product.price) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="gadgetTab" class="tab-pane fade show">
                    <div class="row">
                        <div v-for="product in otherProducts" :key="product.sku" class="col-6 col-md-4 col-lg-3">
                            <!-- Card -->
                            <div class="card mb-7">
                                <!-- Badge -->
                                <div class="badge badge-white card-badge card-badge-left text-uppercase">
                                    New
                                </div>
                                <!-- Image -->
                                <div class="card-img">
                                    <!-- Image -->
                                    <a class="" :href="product.url_key">
                                        <img class="card-img-top card-img-front"
                                             :src="product.sample_image" alt="..."
                                        >
                                    </a>
                                    <!-- Actions -->
                                    <div class="card-actions">
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="modal"
                                                    data-target="#modalProduct"
                                            >
                                                <i class="fe fe-eye"/>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                    data-toggle="button"
                                            >
                                                <i class="fe fe-shopping-cart"/>
                                            </button>
                                        </span>
                                        <span class="card-action">
                                            <button class="btn btn-xs btn-circle btn-white-primary"
                                                    data-toggle="button"
                                            >
                                                <i class="fe fe-heart"/>
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
                                        <a class="text-body" :href="product.url_key">
                                            {{ product.name }}
                                        </a>
                                    </div>

                                    <!-- Price -->
                                    <div class="font-weight-bold text-muted">
                                        ${{ productPrice(product.price) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Link  -->
                    <div class="mt-7 text-center">
                        <a class="link-underline" href="/category">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'ProductSection',
        data(){
            return{
                mensProduct: [],
                womensProduct: [],
                otherProducts: []
            }
        },
        mounted () {
            axios.get('/api/home/product-section')
                .then(response => response.data)
                .then(response => {
                    this.mensProduct = response
                    this.womensProduct = response
                    this.otherProducts = response
                })
        },
        methods: {
            productPrice (price) {
                return (price / 100).toFixed(2)
            }
        }
    }
</script>
