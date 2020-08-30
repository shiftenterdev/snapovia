<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" href="{{asset('adminhtml/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @yield('style')
    <link rel="stylesheet" href="{{asset('adminhtml/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminhtml/dist/css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini text-sm">
<div class="wrapper">

    @include('admin.partials.navbar')

    @include('admin.partials.sidebar')

    <div class="content-wrapper">

        @include('admin.partials.message')

        @yield('content')

    </div>

    @include('admin.partials.footer')

</div>

<script src="{{asset('adminhtml/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminhtml/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminhtml/dist/js/adminlte.js')}}"></script>
<script>
    $(() => {
        $('a.nav-link.active').parents('.has-treeview').addClass('menu-open');

        $('.data-filter').css('display','none');

        $('.show-filter').on('click',function(){
            let x = document.querySelector(".data-filter");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        });
    });
</script>
@yield('script')
</body>
</html>
