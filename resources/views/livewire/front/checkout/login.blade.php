<div class="modal fade" id="modalCustomerLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fe fe-x" aria-hidden="true"></i>
            </button>

            <!-- Header-->
            <div class="modal-header line-height-fixed font-size-lg">
                <strong class="mx-auto">{{__('Welcome back')}} 😉</strong>
            </div>

            <!-- Body -->
            <div class="modal-body text-center">
                <!-- Form -->
                <form autocomplete="off" wire:submit.prevent="login">
                @csrf
                <!-- Email -->
                    <div class="form-group">
                        <label class="sr-only" for="emailaddress">
                            {{__('Email Address')}} *
                        </label>
                        <input class="form-control form-control-sm" id="emailaddress" wire:model="email" type="email" placeholder="{{__('Email Address')}} *" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="passwordInput">
                            {{__('Password')}} *
                        </label>
                        <input class="form-control form-control-sm" id="passwordInput" wire:model="password" type="password" placeholder="{{__('Password')}} *" required>
                    </div>

                    <!-- Button -->
                    <button class="btn btn-sm btn-dark" type="submit">
                        {{__('Login')}}
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>
