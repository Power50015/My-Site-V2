<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Admin') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <!-- Plugins css -->
    <link href="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    @isset($CSSLinked)
    {{ $CSSLinked }}
   
    @endisset
    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('layouts.navigation')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.leftBar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            {{ $slot }}
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Adminto theme by <a href="https://elements.envato.com/admin-template-adminto-E85H4R" target="_blank">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->
    <!-- Right Sidebar -->
    @include('layouts.rightBar')
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Vendor -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- knob plugin -->
    <script src="{{ asset('admin/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/dropify/js/dropify.min.js') }}"></script>
    <!-- Plugins js -->
    @isset($PluginsJs)
    {{ $PluginsJs }}
    @endisset
    <!-- Init js-->
    <script src="{{ asset('admin/assets/js/pages/form-fileuploads.init.js') }}"></script>
    <!-- Tost-->
    <script src="{{ asset('admin/assets/libs/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
    <!-- App js-->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
    @isset($ScriptJs)
    {{ $ScriptJs }}
    @endisset

</body>

</html>