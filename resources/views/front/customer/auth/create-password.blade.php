@extends('front.layouts.default')
@section('title','Create New Password | ')
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
                            <h6 class="mb-7">{{__('Create New Password')}}</h6>
                            <form method="post" action="{{route('welcome')}}" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="loginEmail">
                                                {{__('New Password')}} *
                                            </label>
                                            <input class="form-control form-control-sm" id="loginEmail" name="password"
                                                   type="password" placeholder="{{__('New password')}} *">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="loginPassword">
                                                {{__('Confirm Password')}} *
                                            </label>
                                            <input class="form-control form-control-sm" id="loginPassword"
                                                   name="password_confirmation" type="password" wire:model="password" placeholder="{{__('Confirm Password')}} *">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-sm btn-dark" type="submit">
                                            {{__('Submit New Password')}}
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
