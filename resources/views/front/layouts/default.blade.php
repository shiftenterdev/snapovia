<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{route('welcome')}}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">

    <!-- meta tag     -->
    <!-- Primary Meta Tags -->
    <title>@yield('title')Snapovia</title>
    <meta name="title" content="Snapovia wear future trends">
    <meta name="description"
          content="Exciting fashion items at your fingertips. Just grab your one quickly and conveniently.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://snapovia.com/">
    <meta property="og:title" content="Snapovia wear future trends">
    <meta property="og:description"
          content="Exciting fashion items at your fingertips. Just grab your one quickly and conveniently.">
    <meta property="og:image" content="https://snapovia.com/meta/myozeshop.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://snapovia.com/">
    <meta property="twitter:title" content="Snapovia wear future trends">
    <meta property="twitter:description"
          content="Exciting fashion items at your fingertips. Just grab your one quickly and conveniently.">
    <meta property="twitter:image" content="https://snapovia.com/meta/myozeshop.jpg">

    <meta name="csrf-token" content="{{ csrf_token() }}">

@include('front.partials.tracking_code_head')
<!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/flickity/dist/flickity.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/highlightjs/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/flickity-fade/flickity-fade.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/feather/feather.css')}}">
    <link rel="stylesheet" href="//unpkg.com/swiper/css/swiper.min.css">
    <livewire:styles/>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/myozeshop.css')}}">


</head>
<body>

{{--<div class="loading">--}}
{{--    <div class="lds-ellipsis">--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- MODALS -->

@include('front.partials.modals.newsletter')

@include('front.partials.modals.password_reset')

@include('front.partials.modals.product')

@include('front.partials.modals.search')

@include('front.partials.modals.mini-cart')

@include('front.partials.modals.sidebar')

@include('front.partials.modals.size_chart')

@include('front.partials.modals.waitlist')

@include('front.partials.navbar')

@yield('content')

@include('front.partials.footer')


<!-- JAVASCRIPT -->
<!-- Libs JS -->
<script src="{{asset('frontend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/flickity/dist/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/smooth-scroll/dist/smooth-scroll.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/list.js/dist/list.min.js')}}" defer></script>
<script src="{{asset('frontend/assets/libs/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/flickity-fade/flickity-fade.js')}}"></script>
<script src="//unpkg.com/swiper/js/swiper.min.js" defer></script>

<!-- Theme JS -->
<script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>
<livewire:scripts/>
<script src="{{asset('frontend/assets/js/myozeshop.js')}}"></script>
@yield('script')


</body>
</html>
