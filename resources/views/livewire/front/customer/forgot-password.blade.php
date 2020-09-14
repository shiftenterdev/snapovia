<div class="modal-body text-center">
    <p class="mb-7 font-size-sm text-gray-500">
        {{__('Please enter your Email Address. You will receive a link to create a new password via Email.')}}
    </p>
    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <form wire:submit.prevent="submit" autocomplete="off">
        <div class="form-group">
            <label class="sr-only" for="modalPasswordResetEmail">
                {{__('Email Address')}} *
            </label>
            <input class="form-control form-control-sm" wire:model="reset_email" id="modalPasswordResetEmail"
                   type="email" placeholder="{{__('Email Address')}} *">
        </div>
        <button class="btn btn-sm btn-dark" type="submit">
            {{__('Reset Password')}}
        </button>
    </form>
</div>
