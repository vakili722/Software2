<!DOCTYPE html>
<html>
<head>
    <!-- meta tag section -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @yield('meta')

    <!-- title tag -->
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap-rtl.css') }}">
    <!-- AdminLTE Skins. -->
    <link rel="stylesheet" href="{{ url('css/AdminLTE-rtl.css') }}">
    <link rel="stylesheet" href="{{ url('css/skins/_all-skins-rtl.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- custom css -->
    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini layout-boxed">
<div class="wrapper">
    <!-- Header Navbar -->
    <header class="main-header">
        @include('header')
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('sidebar')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- System Messages -->
        @include('message')
        <!-- Body Of Content -->
        @include('content')
    </div>
    <!-- footer -->
    <footer class="main-footer">
        @include('footer')
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        @include('control')
    </aside>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.1.4 -->
<script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('plugins/fastclick/fastclick.min.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ url('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('js/demo-rtl.js') }}"></script>

<!-- custom script -->
@yield('script')
</body>
</html>
