<!-- Newsletter: Horizontal -->
<div class="modal fade" id="modalNewsletterHorizontal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Content -->
            <div class="row no-gutters">
                <div class="col-12 col-lg-5">

                    <!-- Image -->
                    <img class="img-fluid" src="/frontend/assets/img/covers/cover-25.jpg" alt="...">

                </div>
                <div class="col-12 col-lg-7 d-flex flex-column px-md-8">

                    <!-- Body -->
                    <div class="modal-body my-auto py-10">

                        <!-- Heading -->
                        <h4>{{__('Subscribe to Newsletter and get 15% Discount')}}</h4>

                        <!-- Text -->
                        <p class="mb-7 font-size-lg">
                            On your next purchase
                        </p>

                        <!-- Form -->
                        <form>
                            <div class="form-row">
                                <div class="col">

                                    <!-- Input -->
                                    <label class="sr-only" for="modalNewsletterHorizontalEmail">{{__('Enter Email')}} *</label>
                                    <input class="form-control form-control-sm" id="modalNewsletterHorizontalEmail" type="email" placeholder="{{__('Enter Email
Enter Email')}} *">

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <button class="btn btn-sm btn-dark" type="submit">
                                        <i class="fe fe-send"></i>
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer pt-0">

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox">

                            <!-- Input -->
                            <input class="custom-control-input" id="modalNewsletterHorizontalCheckbox" type="checkbox">

                            <!-- Label -->
                            <label class="custom-control-label font-size-xs" for="modalNewsletterHorizontalCheckbox">
                                Prevent this Pop-up
                            </label>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Newsletter: Vertical -->
<div class="modal fade" id="modalNewsletterVertical" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <!-- Close -->
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Body -->
            <div class="modal-body mt-2 mr-2 ml-2 py-10 bg-cover text-center text-white" style="background-image: url(./front/assets/img/covers/cover-26.jpg);">

                <!-- Heading -->
                <h4>Subscribe to Newsletter and get 15% Discount</h4>

                <!-- Text -->
                <p class="mb-0 font-size-lg">
                    On your next purchase
                </p>

            </div>

            <!-- Body -->
            <div class="modal-body py-9">

                <!-- Form -->
                <form>
                    <div class="form-row">
                        <div class="col">

                            <!-- Input -->
                            <label class="sr-only" for="modalNewsletterVerticalEmail">Enter Email *</label>
                            <input class="form-control form-control-sm" id="modalNewsletterVerticalEmail" type="email" placeholder="Enter Email *">

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <button class="btn btn-sm btn-dark" type="submit">
                                Subscribe
                            </button>

                        </div>
                    </div>
                </form>

            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-center pt-0">

                <!-- Checkbox -->
                <div class="custom-control custom-checkbox">

                    <!-- Input -->
                    <input class="custom-control-input" id="modalNewsletterVerticalCheckbox" type="checkbox">

                    <!-- Label -->
                    <label class="custom-control-label font-size-xs" for="modalNewsletterVerticalCheckbox">
                        Prevent this Pop-up
                    </label>

                </div>

            </div>

        </div>

    </div>
</div>
