<div class="card card-lg">
    <div class="card-body">

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif


        <h6 class="mb-7">{{__('New Customer')}}</h6>


        <form method="post" wire:submit.prevent="registration" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12">


                    <div class="form-group">
                        <label class="sr-only" for="registerFirstName">
                            {{__('First Name')}} *
                        </label>
                        <input class="form-control form-control-sm" name="first_name"
                               id="registerFirstName" type="text" placeholder="{{__('First Name')}} *"
                               wire:model="first_name">
                    </div>

                </div>
                <div class="col-12">

                    <!-- Email -->
                    <div class="form-group">
                        <label class="sr-only" for="registerLastName">
                            {{__('Last Name')}} *
                        </label>
                        <input class="form-control form-control-sm" name="last_name"
                               id="registerLastName" type="text" placeholder="{{__('Last Name')}} *"
                               wire:model="last_name">
                    </div>

                </div>
                <div class="col-12">

                    <!-- Email -->
                    <div class="form-group">
                        <label class="sr-only" for="registerEmail">
                            {{__('Email Address')}} *
                        </label>
                        <input class="form-control form-control-sm" name="email" id="registerEmail"
                               type="email" placeholder="{{__('Email Address')}} *" wire:model="email">
                    </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Password -->
                    <div class="form-group">
                        <label class="sr-only" for="registerPassword">
                            {{__('Password')}} *
                        </label>
                        <input class="form-control form-control-sm" name="password"
                               id="registerPassword" type="password" placeholder="{{__('Password')}} *"
                               wire:model="password">
                    </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Password -->
                    <div class="form-group">
                        <label class="sr-only" for="registerPasswordConfirm">
                            {{__('Confirm Password')}} *
                        </label>
                        <input class="form-control form-control-sm" name="password_confirmation"
                               id="registerPasswordConfirm" type="password"
                               placeholder="{{__('Confirm Password')}} *" wire:model="password_confirmation">
                    </div>

                </div>
                <div class="col-12 col-md-auto">

                    <!-- Link -->
                    <div class="form-group font-size-sm text-muted">
                        {{__('By registering your details, you agree with our Terms &amp; Conditions, and Privacy and Cookie Policy.')}}
                    </div>

                </div>
                <div class="col-12 col-md">

                    <!-- Newsletter -->
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="registerNewsletter"
                                   type="checkbox">
                            <label class="custom-control-label" for="registerNewsletter">
                                {{__('Sign me up for the Newsletter!')}}
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <!-- Button -->
                    <button class="btn btn-sm btn-dark" type="submit">
                        {{__('Register')}}
                    </button>

                </div>
            </div>
        </form>

    </div>
</div>
