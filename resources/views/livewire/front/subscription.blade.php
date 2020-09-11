<div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8 col-xl-6">
        <h5 class="mb-7 text-center text-white">{{__('Want style Ideas and Treats?')}}</h5>
        @if(session()->has('success'))
            <div class="bg-white p-3 my-3">
                {{session('success')}}
            </div>
        @endif
        <form class="mb-11" wire:submit.prevent="subscribe">
            <div class="form-row align-items-start">
                <div class="col">
                    <input type="email" class="form-control form-control-gray-700 form-control-lg"
                           placeholder="{{__('Enter Email')}} *" wire:model.debounce.500ms="email">
                    @error('email')
                    <div class="bg-white p-3 my-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-gray-500 btn-lg">{{__('Subscribe')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
