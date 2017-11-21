<!DOCTYPE html>
<html>
@include('partials.header')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('partials.body-header')
<!-- Left side column. contains the logo and sidebar -->
@include('partials.body-sidebar')

<!-- Content Wrapper. Contains page content -->
@include('partials.body-content-wrapper')
<!-- /.content-wrapper -->
@include('partials.body-main-footer')

<!-- Control Sidebar -->
@include('partials.body-control-sidebar')
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

@include('partials.scripts')
</body>
</html>
