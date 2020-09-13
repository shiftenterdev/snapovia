@extends('front.layouts.default')
@section('title','Checkout | ')
@section('content')

    <x-front.breadcrumb>
        <li class="breadcrumb-item">
            <a class="text-gray-400" href="{{route('cart')}}">{{__('Shopping Cart')}}</a>
        </li>
        <x-slot name="active">
            {{__('Checkout')}}
        </x-slot>
    </x-front.breadcrumb>

    <livewire:front.checkout/>

    <x-front.shopping-info/>
@endsection

@section('script')
    <script>
        window.addEventListener('closeLoginModal', event => {
            document.querySelector('#modalCustomerLogin .close').click();
        });
    </script>
{{--    <script src="https://js.stripe.com/v3"></script>--}}
{{--    <script>--}}
{{--        let stripe = Stripe('{{env('STRIPE_KEY')}}');--}}

{{--        let checkoutButton = document.getElementById('stripe-checkout');--}}

{{--        checkoutButton.addEventListener('click', function() {--}}
{{--            stripe.redirectToCheckout({--}}
{{--                sessionId: '{{$session_id}}'--}}
{{--            }).then(function (result) {--}}
{{--                alert(result.error.message);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
