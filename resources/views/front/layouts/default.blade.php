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
    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])
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
<script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>
@livewireScriptConfig
<script src="{{asset('frontend/assets/js/snapovia.js')}}"></script>
@yield('script')
</body>
</html>
