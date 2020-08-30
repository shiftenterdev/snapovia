<!-- Password Reset -->
<div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Header-->
            <div class="modal-header line-height-fixed font-size-lg">
                <strong class="mx-auto">{{__('Forgot Password')}}?</strong>
            </div>

            <!-- Body -->
            <div class="modal-body text-center">

                <!-- Text -->
                <p class="mb-7 font-size-sm text-gray-500">
                    {{__('Please enter your Email Address. You will receive a link to create a new password via Email.')}}
                </p>

                <!-- Form -->
                <form>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="sr-only" for="modalPasswordResetEmail">
                            {{__('Email Address')}} *
                        </label>
                        <input class="form-control form-control-sm" id="modalPasswordResetEmail" type="email" placeholder="{{__('Email Address')}} *" required>
                    </div>

                    <!-- Button -->
                    <button class="btn btn-sm btn-dark">
                        {{__('Reset Password')}}
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>
