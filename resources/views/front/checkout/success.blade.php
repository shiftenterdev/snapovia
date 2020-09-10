@extends('front.layouts.default')

@section('content')
    <section class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                    <!-- Icon -->
                    <div class="mb-7 font-size-h1">❤️</div>

                    <!-- Heading -->
                    <h2 class="mb-5">{{__('Your Order is Completed!')}}</h2>

                    <!-- Text -->
                    <p class="mb-7 text-gray-500">
                        Your order <span class="text-body text-decoration-underline">
                            <ins>#{{$order->order_id}}</ins>
                        </span> has been completed.
                        {{__('Your order details are shown for your personal account.')}}
                    </p>

                    @if(Customer::check())
                        <a class="btn btn-dark" href="{{route('customer.order')}}">
                            {{__('View My Orders')}}
                        </a>
                    @else
                        <a class="btn btn-dark" href="{{route('customer.account.direct')}}">
                            {{__('Create a new account')}}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
