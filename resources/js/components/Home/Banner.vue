<template>
    <section>
        <div class="row no-gutters d-block d-lg-flex flickity flickity-lg-none" data-flickity='{"watchCSS": true}'>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column bg-cover"
                 style="background-image: url('/frontend/assets/img/covers/cover-1.jpg');">
                <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
                    <div class="card-body mt-auto mb-n11 py-8">

                        <!-- Heading -->
                        <h1 class="mb-0 font-weight-bolder">
                            Women
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
                 style="background-image: url('/frontend/assets/img/covers/cover-2.jpg');">
                <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
                    <div class="card-body mt-auto mb-n11 py-8">

                        <!-- Heading -->
                        <h1 class="mb-0 font-weight-bolder">
                            Men
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
                 style="background-image: url('/frontend/assets/img/covers/cover-3.jpg');">
                <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
                    <div class="card-body mt-auto mb-n11 py-8">

                        <!-- Heading -->
                        <h1 class="mb-0 font-weight-bolder">
                            Kids
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
</template>

<script>
    export default {
        name: 'Banner'
    }
</script>
