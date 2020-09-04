<template>
    <section class="py-13 bg-cover" style="background-image: url(frontend/assets/img/covers/cover-4.jpg)">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-8 col-lg-6">

                    <!-- Heading -->
                    <h3 class="mb-7">
                        Get -50% from <br/>Summer Collection
                    </h3>

                    <!-- Counter -->
                    <div class="d-flex mb-9" data-countdown data-date="Jan 5, 2021 15:37:25">
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-days>00</div>
                            <div class="heading-xxs text-muted">Days</div>
                        </div>
                        <div class="px-1 px-md-4">
                            <div class="font-size-h2 font-weight-bolder text-primary">:</div>
                        </div>
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-hours>00</div>
                            <div class="heading-xxs text-muted">Hours</div>
                        </div>
                        <div class="px-1 px-md-4">
                            <div class="font-size-h2 font-weight-bolder text-primary">:</div>
                        </div>
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-minutes>00</div>
                            <div class="heading-xxs text-muted">Minutes</div>
                        </div>
                        <div class="px-1 px-md-4">
                            <div class="font-size-h2 font-weight-bolder text-primary">:</div>
                        </div>
                        <div class="text-center">
                            <div class="font-size-h1 font-weight-bolder text-primary" data-seconds>00</div>
                            <div class="heading-xxs text-muted">Seconds</div>
                        </div>
                    </div>

                    <!-- Button -->
                    <a class="btn btn-dark" href="shop.html">
                        Shop Now <i class="fe fe-arrow-right ml-2"></i>
                    </a>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name:'Countdown'
    }
</script>