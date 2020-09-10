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
        name:'Countdown',
        mounted() {
            this.startCountDown();
        },
        methods:{
            startCountDown(){
                let t = document.querySelectorAll("[data-countdown]");
                function o(t, e) {
                    let a = t - (new Date).getTime(), o = Math.floor(a / 864e5);
                    o = o < 10 ? "0" + o : o;
                    let n = Math.floor(a % 864e5 / 36e5);
                    n = n < 10 ? "0" + n : n;
                    let l = Math.floor(a % 36e5 / 6e4);
                    l = l < 10 ? "0" + l : l;
                    let i = Math.floor(a % 6e4 / 1e3);
                    i = i < 10 ? "0" + i : i, e.querySelector("[data-days]").innerHTML = o, e.querySelector("[data-hours]").innerHTML = n, e.querySelector("[data-minutes]").innerHTML = l, e.querySelector("[data-seconds]").innerHTML = i
                }
                t.length && [].forEach.call(t, function (t) {
                    !function (t) {
                        let e = t.dataset.date, a = new Date(e).getTime();
                        o(a, t), setInterval(function () {
                            o(a, t)
                        }, 1e3)
                    }(t)
                })
            }
        }
    }
</script>
