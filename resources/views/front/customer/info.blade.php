@extends('front.layouts.default')
@section('title','My Account Info | ')
@section('content')

    <x-front.breadcrumb>
        <x-slot name="active">
            {{__('My Account')}}
        </x-slot>
    </x-front.breadcrumb>

    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Heading -->
                    <h3 class="mb-10">{{__('My Account')}}</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">

                    <!-- Nav -->
                    @include('front.customer.partials.menu')

                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="accountFirstName">
                                        {{__('First Name')}} *
                                    </label>
                                    <input class="form-control form-control-sm" id="accountFirstName" type="text" placeholder="{{__('First Name')}} *" value="{{$customer->first_name}}" required="">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="accountLastName">
                                        {{__('Last Name')}} *
                                    </label>
                                    <input class="form-control form-control-sm" id="accountLastName" type="text" placeholder="{{__('Last Name')}} *" value="{{$customer->last_name}}" required="required">
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="accountEmail">
                                        {{__('Email Address')}} *
                                    </label>
                                    <input class="form-control form-control-sm" id="accountEmail" type="email" placeholder="{{__('Email Address')}} *" value="{{$customer->email}}" required="required">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="accountPassword">
                                        {{__('Current Password')}} *
                                    </label>
                                    <input class="form-control form-control-sm" id="accountPassword" type="password" placeholder="{{__('Current Password')}} *" required="">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="AccountNewPassword">
                                        {{__('New Password')}} *
                                    </label>
                                    <input class="form-control form-control-sm" id="AccountNewPassword" type="password" placeholder="{{__('New Password')}} *" required="">
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">

                                <!-- Birthday -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>{{__('Date of Birth')}}</label>

                                    <!-- Inputs -->
                                    <div class="form-row">
                                        <div class="col-auto">

                                            <!-- Date -->
                                            <label class="sr-only" for="accountDate">
                                                Date
                                            </label>
                                            <select class="custom-select custom-select-sm" id="accountDate">
                                                <option>10</option>
                                                <option>11</option>
                                                <option selected="">12</option>
                                            </select>

                                        </div>
                                        <div class="col">

                                            <!-- Date -->
                                            <label class="sr-only" for="accountMonth">
                                                Month
                                            </label>
                                            <select class="custom-select custom-select-sm" id="accountMonth">
                                                <option>January</option>
                                                <option selected="">February</option>
                                                <option>March</option>
                                            </select>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Date -->
                                            <label class="sr-only" for="accountYear">
                                                Year
                                            </label>
                                            <select class="custom-select custom-select-sm" id="accountYear">
                                                <option>1990</option>
                                                <option selected="">1991</option>
                                                <option>1992</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-12 col-lg-6">

                                <!-- Gender -->
                                <div class="form-group mb-8">
                                    <label>{{__('Gender')}}</label>
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-sm btn-outline-border active">
                                            <input type="radio" name="gender" checked=""> {{__('Male')}}
                                        </label>
                                        <label class="btn btn-sm btn-outline-border">
                                            <input type="radio" name="gender"> {{__('Female')}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Button -->
                                <button class="btn btn-dark" type="submit">{{__('Save Changes')}}</button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
