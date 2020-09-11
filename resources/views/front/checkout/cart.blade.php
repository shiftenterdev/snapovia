@extends('front.layouts.default')
@section('title','Shopping Cart | ')
@section('content')

    <x-front.breadcrumb>
        <x-slot name="active">
            {{__('Shopping Cart')}}
        </x-slot>
    </x-front.breadcrumb>

    <livewire:front.checkout-cart/>

    <x-front.shopping-info/>

@endsection
