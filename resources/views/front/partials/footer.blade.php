<!-- FOOTER -->
<footer class="bg-dark bg-cover @@classList" style="background-image: url(/frontend/assets/img/patterns/pattern-2.svg)">
    <div class="py-12 border-bottom border-gray-700">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <h5 class="mb-7 text-center text-white">{{__('Want style Ideas and Treats?')}}</h5>
                    <form class="mb-11">
                        <div class="form-row align-items-start">
                            <div class="col">
                                <input type="email" class="form-control form-control-gray-700 form-control-lg"
                                       placeholder="{{__('Enter Email')}} *" required>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-gray-500 btn-lg">{{__('Subscribe')}}</button>
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
                        {{__('Support')}}
                    </h6>

                    <!-- Links -->
                    <ul class="list-unstyled mb-7 mb-sm-0">
                        <li>
                            <a class="text-gray-300" href="{{route('contact')}}">{{__('Contact Us')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="{{route('faq')}}">{{__('FAQs')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" data-toggle="modal" href="#modalSizeChart">{{__('Size Guide')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="{{route('shipping-and-returns')}}">{{__('Shipping & Returns')}}</a>
                        </li>
                    </ul>

                </div>
                <div class="col-6 col-sm">

                    <!-- Heading -->
                    <h6 class="heading-xxs mb-4 text-white">
                        {{__('Shop')}}
                    </h6>

                    <!-- Links -->
                    <ul class="list-unstyled mb-7 mb-sm-0">
                        <li>
                            <a class="text-gray-300" href="men">{{__('Men\'s Shopping')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="women">{{__('Women\'s Shopping')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="kids">{{__('Kids\' Shopping')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="discounts">{{__('Discounts')}}</a>
                        </li>
                    </ul>

                </div>
                <div class="col-6 col-sm">

                    <!-- Heading -->
                    <h6 class="heading-xxs mb-4 text-white">
                        {{__('Company')}}
                    </h6>

                    <!-- Links -->
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a class="text-gray-300" href="{{route('about.us')}}">{{__('About us')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="{{route('career')}}">{{__('Careers')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="{{route('terms')}}">{{__('Terms & Conditions')}}</a>
                        </li>
                        <li>
                            <a class="text-gray-300" href="{{route('privacy')}}">{{__('Privacy & Cookie policy')}}</a>
                        </li>
                    </ul>

                </div>
                <div class="col-6 col-sm">

                    <!-- Heading -->
                    <h6 class="heading-xxs mb-4 text-white">
                        {{__('Contact')}}
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
                        Snapovia © 2020 {{__('All rights reserved')}}.
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
