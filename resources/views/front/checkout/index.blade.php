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
            document.querySelector('.customer-modal-close').click();
        });
    </script>
@endsection
