@extends('front.layouts.default')
@section('title','Shopping never been that easy | ')
@section('content')
    <!-- PROMO -->
    <x-front.home.promo>
        ⚡️ {{__('Happy Holiday Deals on Everything')}} ⚡️
    </x-front.home.promo>

    <!-- CATEGORIES -->
    <x-front.home.categories/>

    <!-- FEATURES -->
    <x-front.home.feature/>

    <!-- BEST PICKS -->
    <x-front.home.best-picks/>

    <!-- TOP SELLERS -->
    <livewire:front.home.product-section/>

    <!-- COUNTDOWN -->
    <x-front.home.countdown/>

    <!-- REVIEWS -->
    <x-front.home.reviews/>

    <!-- BRANDS -->
    <x-front.home.brands/>

@endsection
