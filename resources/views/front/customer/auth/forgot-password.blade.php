@extends('front.layouts.default')
@section('title','Forgot Password | ')
@section('content')
    <section class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card card-lg mb-10 mb-md-0">
                        <div class="card-body">
                            @if(session()->has('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                            <h6 class="mb-7">{{__('Forgot Password')}}</h6>
                            <p class="mb-7 font-size-sm text-gray-500">
                                {{__('Please enter your Email Address. You will receive a link to create a new password via Email.')}}
                            </p>
                            <form method="post" action="{{route('forgot.password.post')}}" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="loginEmail">
                                                {{__('Email Address')}} *
                                            </label>
                                            <input class="form-control form-control-sm" id="loginEmail" name="email"
                                                   type="email" placeholder="{{__('Email Address')}} *" required>
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-sm btn-dark" type="submit">
                                            {{__('Reset Password')}}
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
