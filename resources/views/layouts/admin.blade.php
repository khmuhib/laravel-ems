@include('admin.inc.header')

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.inc.sideber')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.inc.navbar')

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('admin.inc.footer')
