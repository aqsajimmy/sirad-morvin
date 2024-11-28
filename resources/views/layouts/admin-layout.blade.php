<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.partials.title-meta')

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    @include('layouts.partials.head-css')

</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.partials.topbar')

        @include('layouts.partials.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                @include('layouts.partials.page-title')

                <!-- ============================================================== -->
                {{ $slot }}
                <!-- ============================================================== -->
            </div>
            <!-- End Page-content -->

            @include('layouts.partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('layouts.partials.right-sidebar')

    @include('layouts.partials.vendor-scripts')

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>


    <script src="assets/js/app.js"></script>

</body>

</html>
