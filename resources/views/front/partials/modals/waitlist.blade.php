<!-- Wait List -->
<div class="modal fade" id="modalWaitList" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Header-->
            <div class="modal-header line-height-fixed font-size-lg">
                <strong class="mx-auto">{{__('Wait List')}}</strong>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <div class="row mb-6">
                    <div class="col-12 col-md-3">

                        <!-- Image -->
                        <a href="./product.html">
                            <img class="img-fluid mb-7 mb-md-0" src="/frontend/assets/img/products/product-6.jpg" alt="...">
                        </a>

                    </div>
                    <div class="col-12 col-md-9">

                        <!-- Label -->
                        <p>
                            <a class="font-weight-bold text-body" href="./product.html">Cotton floral print Dress</a>
                        </p>

                        <!-- Radio -->
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeOne" value="6" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeOne">3XS</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeTwo" value="6.5" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeTwo">2XS</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeThree" value="7" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeThree">XS</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeFour" value="7.5" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption" checked>
                            <label class="custom-control-label" for="modalWaitListSizeFour">S</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeFive" value="8" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeFive">M</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeSix" value="8.5" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeSix">LG</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeSeven" value="9" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeSeven">XL</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeEight" value="9.5" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeEight">2XL</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeNine" value="10" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeNine">3XL</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-control-size mb-2">
                            <input type="radio" class="custom-control-input" name="modalWaitListSize"
                                   id="modalWaitListSizeTen" value="10.5" data-toggle="form-caption"
                                   data-target="#modalWaitListSizeCaption">
                            <label class="custom-control-label" for="modalWaitListSizeTen">4XL</label>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">

                        <!-- Text -->
                        <p class="font-size-sm text-center text-gray-500">
                            Justo ut diam erat hendrerit morbi porttitor,
                            per eu curabitur diam sociis.
                        </p>

                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-12 col-md-6">

                        <!-- Form group -->
                        <div class="form-group">
                            <label class="sr-only" for="listName">{{__('Your Name')}}</label>
                            <input class="form-control" id="listName" type="text" placeholder="{{__('Your Name')}} *" required>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Form group -->
                        <div class="form-group">
                            <label class="sr-only" for="listEmail">{{__('Your Email')}}</label>
                            <input class="form-control" id="listEmail" type="email" placeholder="{{__('Your Email')}} *" required>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">

                        <!-- Button -->
                        <button class="btn btn-dark" type="submit">{{__('Subscribe')}}</button>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
