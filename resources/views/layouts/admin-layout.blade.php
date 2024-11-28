<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.partials.title-meta')

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
                <div class="container-fluid">
                    <div class="page-content-wrapper">
                        {{ $slot }}
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- End Page-content -->

            @include('layouts.partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    {{-- @include('layouts.partials.right-sidebar') --}}

    @include('layouts.partials.vendor-scripts')

</body>

</html>
