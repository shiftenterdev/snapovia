<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{route('welcome')}}">
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
    <title>@yield('title')Snapovia</title>
    <x-meta/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front.partials.tracking_code_head')
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/flickity/dist/flickity.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/highlightjs/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/flickity-fade/flickity-fade.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/feather/feather.css')}}">
    <livewire:styles/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.min.css')}}">
</head>
<body>

<x-front.newsletter/>
<x-front.quick-view/>
<x-front.search/>
<x-front.mini-cart/>
<x-front.m-sidebar/>
<x-front.navbar/>

@yield('content')

<x-front.footer/>
<!--script-->
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
<script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>
<livewire:scripts/>
<script src="{{asset('frontend/assets/js/snapovia.js')}}"></script>
@yield('script')
</body>
</html>
