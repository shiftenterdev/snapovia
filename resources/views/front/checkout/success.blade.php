@extends('front.layouts.default')

@section('content')
    <section class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                    <!-- Icon -->
                    <div class="mb-7 font-size-h1">❤️</div>

                    <!-- Heading -->
                    <h2 class="mb-5">Your Order is Completed!</h2>

                    <!-- Text -->
                    <p class="mb-7 text-gray-500">
                        Your order <span class="text-body text-decoration-underline">673290789</span> has been completed. Your order details
                        are shown for your personal accont.
                    </p>

                    <!-- Button -->
                    <a class="btn btn-dark" href="#!">
                        View My Orders
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection