@extends('front.layouts.default')

@section('content')
    <nav class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb mb-0 font-size-xs text-gray-400">
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Not Found
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>
    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-7 text-center">404 😞</h3>
                    <div class="text-center">
                        <h4>Page not Found</h4>
                        <hr>
                        <a href="{{route('welcome')}}" class="btn btn-primary">Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
