<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titleContent')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @yield('cssScript')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


@include('inc.header')
<!-- Left side column. contains the logo and sidebar -->

@include('inc.aside')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

       @yield('breadcrumb')


    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('inc.footer')

<!-- Control Sidebar -->
@include('inc.right_aside')

<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@yield('jsScript')
</body>
</html>
