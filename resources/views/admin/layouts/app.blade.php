<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title') Admin Panel</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminhtml/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('adminhtml/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('adminhtml/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminhtml/dist/css/custom.css')}}">
@yield('style')
<!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini text-sm">
<div class="wrapper">
    <!-- Navbar -->
@include('admin.partials.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('admin.partials.sidebar')

<!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @elseif(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                @elseif(Session::has('message'))
                    <div class="alert alert-info">{{Session::get('message')}}</div>
                @endif
            </div>
        </div>
        @yield('content')
    </div>

    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('admin.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminhtml/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('adminhtml/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('adminhtml/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{asset('adminhtml/plugins/chart.js/Chart.min.js')}}"></script>
{{--<script src="{{asset('adminhtml/dist/js/demo.js')}}"></script>--}}
<script src="{{asset('adminhtml/dist/js/pages/dashboard3.js')}}"></script>
<script>
    $(() => {
        $('a.nav-link.active').parents('.has-treeview').addClass('menu-open');
    });
</script>
@yield('script')
</body>
</html>
