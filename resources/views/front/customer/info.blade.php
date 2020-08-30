@extends('front.layouts.default')
@section('title','My Account Info | ')
@section('content')
    <nav class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb mb-0 font-size-xs text-gray-400">
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="{{route('welcome')}}">{{__('Home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('My Account Info')}}
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Heading -->
                    <h3 class="mb-10">{{__('My Account Info')}}</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">

                    <!-- Nav -->
                    @include('front.customer.partials.menu')

                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">
                </div>
            </div>
        </div>
    </section>

@endsection