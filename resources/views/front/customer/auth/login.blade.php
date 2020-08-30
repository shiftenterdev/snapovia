@extends('front.layouts.default')

@section('content')
    <section class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                @include('front.partials.alert')
                <!-- Card -->
                    <div class="card card-lg mb-10 mb-md-0">
                        <div class="card-body">

                            <!-- Heading -->
                            <h6 class="mb-7">{{__('Returning Customer')}}</h6>
                            <!-- Form -->
                            <form method="post" action="{{route('customer.login.post')}}" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="sr-only" for="loginEmail">
                                                {{__('Email Address')}} *
                                            </label>
                                            <input class="form-control form-control-sm" id="loginEmail" name="email"
                                                   type="email" placeholder="{{__('Email Address')}} *" required="">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Password -->
                                        <div class="form-group">
                                            <label class="sr-only" for="loginPassword">
                                                {{__('Password')}} *
                                            </label>
                                            <input class="form-control form-control-sm" id="loginPassword"
                                                   name="password" type="password" placeholder="{{__('Password')}} *" required="">
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

                                        <!-- Link -->
                                        <div class="form-group">
                                            <a class="font-size-sm text-reset" data-toggle="modal"
                                               href="#modalPasswordReset">{{__('Forgot Password')}}?</a>
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-dark" type="submit">
                                            {{__('Sign In')}}
                                        </button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Card -->
                    <div class="card card-lg">
                        <div class="card-body">

                            <!-- Heading -->
                            <h6 class="mb-7">{{__('New Customer')}}</h6>

                            <!-- Form -->
                            <form method="post" action="{{route('customer.create.post')}}" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="sr-only" for="registerFirstName">
                                                {{__('First Name')}} *
                                            </label>
                                            <input class="form-control form-control-sm" name="first_name"
                                                   id="registerFirstName" type="text" placeholder="{{__('First Name')}} *"
                                                   required="">
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
                                                   required="">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="sr-only" for="registerEmail">
                                                {{__('Email Address')}} *
                                            </label>
                                            <input class="form-control form-control-sm" name="email" id="registerEmail"
                                                   type="email" placeholder="{{__('Email Address')}} *" required="">
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
                                                   required="">
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
                                                   placeholder="{{__('Confirm Password')}} *" required="">
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

                </div>
            </div>
        </div>
    </section>
@endsection
