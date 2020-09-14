<div class="card card-lg mb-10 mb-md-0">
    <div class="card-body">
        @if(session()->has('message'))
            <div class="alert alert-warning">{{session('message')}}</div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <h6 class="mb-7">{{__('Returning Customer')}}</h6>

        <form method="post" wire:submit.prevent="login" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="sr-only" for="loginEmail">
                            {{__('Email Address')}} *
                        </label>
                        <input class="form-control form-control-sm" id="loginEmail" wire:model="email" name="email"
                               type="email" placeholder="{{__('Email Address')}} *">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="sr-only" for="loginPassword">
                            {{__('Password')}} *
                        </label>
                        <input class="form-control form-control-sm" id="loginPassword"
                               name="password" type="password" wire:model="password" placeholder="{{__('Password')}} *">
                    </div>
                </div>
                <div class="col-12 col-md">
                    <!-- Remember -->
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="loginRemember" type="checkbox">
                            <label class="custom-control-label" for="loginRemember">
                                {{__('Remember me')}}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="form-group">
                        <a class="font-size-sm text-reset" data-toggle="modal"
                           href="#modalPasswordReset">{{__('Forgot Password')}}?</a>
                    </div>
                    <div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fe fe-x" aria-hidden="true"></i>
                                </button>
                                <div class="modal-header line-height-fixed font-size-lg">
                                    <strong class="mx-auto">{{__('Forgot Password')}}?</strong>
                                </div>
                                <livewire:front.customer.forgot-password/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <button class="btn btn-sm btn-dark" type="submit">
                        {{__('Sign In')}}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
