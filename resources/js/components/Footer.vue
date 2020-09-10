<template>
    <div>
        <footer class="bg-dark bg-cover @@classList" style="background-image: url(/frontend/assets/img/patterns/pattern-2.svg)">
            <div class="py-12 border-bottom border-gray-700">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6">

                            <!-- Heading -->
                            <h5 class="mb-7 text-center text-white">Want style Ideas and Treats?</h5>

                            <!-- Form -->
                            <form class="mb-11">
                                <div class="form-row align-items-start">
                                    <div class="col">
                                        <input type="email" class="form-control form-control-gray-700 form-control-lg"
                                               placeholder="Enter Email *" required>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-gray-500 btn-lg">Subscribe</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-3">

                            <!-- Heading -->
                            <h4 class="mb-6 text-white">Snapovia.</h4>

                            <!-- Social -->
                            <ul class="list-unstyled list-inline mb-7 mb-md-0">
                                <li class="list-inline-item">
                                    <a href="javascript:" class="text-gray-350">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:" class="text-gray-350">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:" class="text-gray-350">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:" class="text-gray-350">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:" class="text-gray-350">
                                        <i class="fab fa-medium"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-sm">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">
                                Support
                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-7 mb-sm-0">
                                <li>
                                    <a class="text-gray-300" href="contact">Contact Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="faq">FAQs</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" data-toggle="modal" href="#modalSizeChart">Size Guide</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="shipping-and-returns">Shipping & Returns</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-sm">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">
                                Shop
                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-7 mb-sm-0">
                                <li>
                                    <a class="text-gray-300" href="men">Men's Shopping</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="women">Women's Shopping</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="kids">Kids' Shopping</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="discounts">Discounts</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-sm">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">
                                Company
                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-gray-300" href="about.us">About us</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="career">Careers</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="terms">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="privacy">Privacy & Cookie policy</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6 col-sm">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-4 text-white">
                                Contact
                            </h6>

                            <!-- Links -->
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-gray-300" href="javascript:">1-202-555-0105</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="javascript:">1-737-999-000</a>
                                </li>
                                <li>
                                    <a class="text-gray-300" href="javascript:">info@snapovia.com</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <!-- Copyright -->
                            <p class="mb-3 mb-md-0 font-size-xxs text-muted">
                                Snapovia © 2020 All rights reserved.
                            </p>

                        </div>
                        <div class="col-auto">

                            <!-- Payment methods -->
                            <img class="footer-payment" src="/frontend/assets/img/payment/mastercard.svg" alt="...">
                            <img class="footer-payment" src="/frontend/assets/img/payment/visa.svg" alt="...">
                            <img class="footer-payment" src="/frontend/assets/img/payment/amex.svg" alt="...">
                            <img class="footer-payment" src="/frontend/assets/img/payment/paypal.svg" alt="...">
                            <img class="footer-payment" src="/frontend/assets/img/payment/maestro.svg" alt="...">
                            <img class="footer-payment" src="/frontend/assets/img/payment/klarna.svg" alt="...">

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        name:'Footer'
    }
</script>
