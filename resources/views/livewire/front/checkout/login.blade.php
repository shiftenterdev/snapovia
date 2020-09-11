<div class="modal-content">

    <!-- Close -->
    <button type="button" class="customer-modal-close close" data-dismiss="modal" aria-label="Close">
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
                <input class="form-control form-control-sm" id="emailaddress" wire:model.debounce.500ms="email" type="email" placeholder="{{__('Email Address')}} *">
                @error('email')
                <div class="aler alert-warning">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="sr-only" for="passwordInput">
                    {{__('Password')}} *
                </label>
                <input class="form-control form-control-sm" id="passwordInput" wire:model.debounce.500ms="password" type="password" placeholder="{{__('Password')}} *">
                @error('password')
                <div class="aler alert-warning">{{$message}}</div>
                @enderror
            </div>

            <!-- Button -->
            <button class="btn btn-sm btn-dark" type="submit">
                {{__('Login')}}
            </button>

        </form>

    </div>

</div>


