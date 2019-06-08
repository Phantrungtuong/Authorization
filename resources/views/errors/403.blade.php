<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
    <div class="container">
        <section class="content">
            <div class="error-page">
                <h1 class="headline text-yellow center-block"> 403</h1>
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i> Oops! You are unauthorized access.</h3>

                    <p>
                        All your actions will directly affect the website!!! <a href="{{route('dasboard.index')}}">Please come back</a>
                    </p>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
    <!-- Content Wrapper. Contains page content -->
    <!-- /.content-wrapper -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script>
            $(function () {
                $("#example1").DataTable();
            });
        </script>
        @include('admin.layouts.footer')
    </div>
</body>
</html>